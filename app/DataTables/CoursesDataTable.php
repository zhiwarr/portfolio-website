<?php

namespace App\DataTables;

use App\Models\Course;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CoursesDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
    ->addIndexColumn()
        ->addColumn('image',function($query){
          return '<img width="200" src="'.$query->image_path.'" />';
        })
        ->addColumn('action', function ($row) {
            return '<div class="d-flex "> <a href="'. route('admin.courses.edit', $row->id). '"
            class="btn mx-1 btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                           <form method="POST" id="form-'.$row->id.'" action="'.route('admin.courses.destroy', $row->id).'"  style="display: inline-block;">
    '.csrf_field().'
    '.method_field('DELETE').'
    <button type="button" onclick="deleteData('.$row->id.')" class="delete-form btn mx-1 btn-xs btn-danger" class="btn btn-danger ml-2">
        <i class="far fa-trash-alt"></i>
    </button>
</form>


</div>';
        })
            ->setRowId('id')
            ->rawColumns(['image','action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Course $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('courses-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        // Button::make('excel'),
                        // Button::make('csv'),
                        // Button::make('pdf'),
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
              Column::make('id'),
              Column::make('course_name'),

              Column::make('image'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
            Column::computed('action')
            ->exportable(false)
            ->printable(false)
            ->width(60)
            ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Courses_' . date('YmdHis');
    }
}