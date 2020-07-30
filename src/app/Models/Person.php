<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Person
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $birthdate
 * @property string $rep_subject
 * @property int $country_id
 * @property string $phone
 * @property string $email
 * @property string|null $company
 * @property string|null $position
 * @property string|null $about
 * @property string|null $photo
 * @property int $show
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereBirthdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereRepSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereShow($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Person whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Person extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'birthdate',
        'rep_sunject',
        'country_id',
        'phone',
        'email',
        'company',
        'position',
        'about',
        'photo',
        'show'
    ];

}
