<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\ChatsDataTable;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class chatController extends Controller
{
    public function index(ChatsDataTable $dataTable)
    {
        return $dataTable->render('admin.chats.index');
    }
    public function destroy(string $id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->back()->with('success','chat deleted successfully');
    }
}