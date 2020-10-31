<?php

namespace App\Http\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Http\Models\Rol;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

     public function titulo(){
        return $this->belongsToMany(Titulo::class, 'favorito', 'id_usuario', 'id_titulo');
    }

    public function rol(){
        return $this->belongsToMany(Rol::class, 'userrol', 'id_user', 'id_rol');
    }

    public static function user_privilegios($id){
        $idrol = self::select("rol.id as rol_id")
                            ->Where('users.id',$id)
                            ->join("userrol","users.id","userrol.id_user")
                            ->join("rol","rol.id","userrol.id_rol")
                            ->get();
        $idrol = $idrol[0]["rol_id"];
        $privilegios_user = Rol::select("privilegios.id as privilegios_id","privilegios.nombre as Privilegio_nombre")
                            ->Where('rol.id',$idrol)
                            ->join("rolprivilegio","rol.id","rolprivilegio.id_rol")
                            ->join("privilegios","privilegios.id","rolprivilegio.id_privilegios")
                            ->get();
        $usuariol = [];
        foreach($privilegios_user as $item){
            $id = $item->privilegios_id;
            $usuariol[$id] = [
                "Nombre" => $item->Privilegio_nombre
            ];
        }return $usuariol;
    }

    public static function datos_usuario(){
        $user = self::select('users.id as id','users.correo as Correo','users.password as Password')
                        ->get();
        $response = [];
        foreach ($user as $item){
            $id = $item->id;
            $response[$id] =[
                "Id"=>$item->id,
                "Correo"=>$item->Correo,
                "Password"=>$item->Password
            ];
        }
        return $response;
    }

    public static function juegos_usuario($id){
        /*Select titulo.nombre, condicion.nombre, plataforma.nombre From users,videojuego, condicion, plataforma, titulo Where titulo.id = videojuego.id_titulo AND users.id = videojuego.id_usuario AND plataforma.id = videojuego.id_plataforma AND condicion.id = videojuego.id_condicion AND users.id = 1*/

        $juegos = self::select('titulo.id as titulo_id','videojuego.id as id','titulo.nombre as Titulo','condicion.nombre as Condicion','plataforma.nombre as Plataforma')
                        ->Where('users.id',$id)
                        ->join('videojuego','users.id','videojuego.id_usuario')
                        ->join('titulo','titulo.id','videojuego.id_titulo')
                        ->join('plataforma','plataforma.id','videojuego.id_plataforma')
                        ->join('condicion','condicion.id','videojuego.id_condicion')
                        ->get();
        $response = [];
        foreach($juegos as $item){
            $id = $item->id;
            $response[$id] = [
                "Id"=>$item->id,
                "id_titulo"=>$item->titulo_id,
                "Titulo"=>$item->Titulo,
                "Condicion"=>$item->Condicion,
                "Plataforma"=>$item->Plataforma
            ];
        }
        return $response;
    }

}


