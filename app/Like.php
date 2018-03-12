<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $guarded = array();

    /** Cada like lo realiza un único usuario.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo(User::class)->latest();
    }

    /** Chusqr que recibe un like
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function chusqer(){
        return $this->belongsTo(Chusqer::class);
    }
}
