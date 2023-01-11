<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'sname',
        'email',
        'password',
        'dob',
        'role',
        'created_by',
        'gender',
        'postal_code',
        'street',
        'city',
        'phone',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function name(){
        return $this->fname.' '.$this->sname;
    }

    public function role_name(){
        return $this->belongsTo(Role::class, 'role', 'id');
    }

    public function get_status(){
        switch ($this->status) {
            case 1:
              return 'Active';
              break;
            case -1:
              return 'Deactive';
              break;
            default:
              return 'Not Specified';
          }
    }
    public function get_status_color(){
        switch ($this->status) {
            case 1:
              return 'bg-success';
              break;
            case -1:
              return 'bg-warning';
              break;
            default:
              return 'bg-secondary';
          }
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function verified(){
        if($this->email_verified_at === null) {
            return false;
        }else{
            return true;
        }
    }


    public function admin(){
        if($this->role == 2 || $this->role == 3) {
            return true;
        }else{
            return false;
        }
    }

    public function created_user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }


    public function updated_user(){
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
