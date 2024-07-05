<?php

namespace App\DataTables;

use App\Models\Hero;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class HerosDataTable extends DataTable
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
            return '<div class="d-flex "> <a href="'. route('admin.hero.edit', $row->id). '"
            class="btn mx-1 btn-xs btn-primary"><i class="fas fa-edit"></i></a>
                           <form method="POST" id="form-'.$row->id.'" action="'.route('admin.hero.destroy', $row->id).'"  style="display: inline-block;">
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
    public function query(Hero $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('heros-table')
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
            Column::make('title'),
            Column::make('subtitle'),
            Column::make('cta_text'),
            Column::make('cta_link'),
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
        return 'Heros_' . date('YmdHis');
    }
}