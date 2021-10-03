<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use App\Models\Member;
use App\Models\BorrowRecord;

class DashboardController extends Controller
{
    public function counter()
    {
        $bookcount = Book::count();
        $membercount = Member::count();
        $recordcount = BorrowRecord::count();

        return view('backend.dashboard', [
            'bookcount' => $bookcount,
            'membercount' => $membercount,
            'recordcount' => $recordcount]);
    }
}
