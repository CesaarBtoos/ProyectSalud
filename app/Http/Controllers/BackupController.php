<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Respaldo  $respaldo
     * @return \Illuminate\Http\Response
     */
    public function show(Respaldo $respaldo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respaldo  $respaldo
     * @return \Illuminate\Http\Response
     */
    public function edit(Respaldo $respaldo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Respaldo  $respaldo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respaldo $respaldo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respaldo  $respaldo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respaldo $respaldo)
    {
        //
    }

    public function backup()
    {
        $host = "localhost";
        $nombre = "proyectoweb";
        $usuario = "root";
        $password = "";
        $fecha = date('Ymd_His');

        $nombre_sql = $nombre .'_'.$fecha.'.sql';

        $dump = "mysqldump --host=$host --user=$usuario --password=$password $nombre > $nombre_sql";
        exec($dump);

        $zip = new ZipArchive();
        
        $nombre_zip = $nombre.'_'.$fecha.'.zip';

        if($zip->open($nombre_zip, ZipArchive::CREATE) === TRUE){
            $zip->addFile($nombre_sql);
            $zip->close();
            unlink($nombre_sql);
            header("Location: $nombre_zip");
            exit();
        }

    }
}
