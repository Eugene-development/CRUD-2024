<?php

namespace App\Models;


use App\Gateways\DatabaseGateway;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class RootModel extends Model
{
    use HasFactory;
    use HasUuids;

    protected $guarded = [];

    // public function getConnection()
    // {
    //     // Определите подключение на основе запроса
    //     $request = app(Request::class);
    //     DatabaseGateway::switchConnection($request);

    //     return parent::getConnection();
    // }
}
