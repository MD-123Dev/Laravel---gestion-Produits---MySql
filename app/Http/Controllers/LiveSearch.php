<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    //

    function action(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $query = $request->get('query');
            if ($query != '') {

                $data = DB::table('produits')
                    ->where('nomproduit', 'like', '%' . $query . '%')
                    ->orWhere('categorie', 'like', '%' . $query . '%')
                    ->orderBy('id', 'desc')
                    ->get();
            } else {
                $data = DB::table('produits')
                    ->orderBy('id', 'Asc')
                    ->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                foreach ($data as $row) {
                    $output .= '
                    <tr>
                    <td>' . $row->id . '</td>
                    <td>' . $row->nomproduit . '</td>
                    <td>' . $row->categorie . '</td>
                    </tr>
                    ';
                }
            } else {
                $output .= '
                <tr>
                <td align="center" colspan="5">
                   no data 
                </td>
                </tr>
                ';
            }
            $data = array(
                'table_data' => $output
            );
            echo json_encode($data);
        }
    }

}
