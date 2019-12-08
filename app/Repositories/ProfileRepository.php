<?php

namespace App\Repositories;

use App\Models\Admin;
use App\Models\Message;
use App\Traits\UploadAble;
use Illuminate\Http\UploadedFile;
use App\Contracts\ProfileContract;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Doctrine\Instantiator\Exception\InvalidArgumentException;
use Illuminate\Support\Facades\Hash;

/**
 * Class ProfileRepository
 *
 * @package \App\Repositories
 */
class ProfileRepository extends BaseRepository implements ProfileContract
{
    use UploadAble;

    /**
     * ProfileRepository constructor.
     * @param Admin $model
     */
    public function __construct(Admin $model)
    {
        parent::__construct($model);
        $this->model = $model;
    }

    /**
     * @param string $order
     * @param string $sort
     * @param array $columns
     * @return mixed
     */
    public function listProfile()
    {
        
        return $this->all();
    }

    /**
     * @param int $id
     * @return mixed
     * @throws ModelNotFoundException
     */
    public function findProfileById(int $id)
    {
        try {
            return $this->findOneOrFail($id);

        } catch (ModelNotFoundException $e) {

            throw new ModelNotFoundException($e);
        }

    }



    /**
     * @param array $params
     * @return mixed
     */
    public function updateProfile(array $params)
    {
        $profile = $this->findProfileById($params['profile_id']);

        $collection = collect($params)->except('_token');

        if ($collection->has('image') && ($params['image'] instanceof  UploadedFile)) {

            if ($profile->image != null) {
                $this->deleteOne($profile->image);
            }

            $image = $this->uploadOne($params['image'], 'profiles');

            $merge = $collection->merge(compact('image'));

        } else {

            $merge = $collection;
        }

        $profile->update($merge->all());

        return $profile;
    }



    /**
     * @param array $params
     * @return mixed
     */
    public function avatarUpdate(array $params)
    {
        
        $profile = $this->findProfileById($params['profile_id']);
        
        $collection = collect($params)->except('_token');

        if ($collection->has('avatar') && ($params['avatar'] instanceof  UploadedFile)) {
            
            if ($profile->avatar != null) {
                $this->deleteOne($profile->avatar);
            }

            $avatar = $this->uploadOne($params['avatar'], 'profiles');
            $profile->avatar = $avatar;
            $profile->save();
        } 

        return $profile;
    }




        /**
     * @param array $params
     * @return Admin|mixed
     */
    public function createProfile(array $params)
    {
        try {

            $collection = collect($params);
            $collection['password'] = Hash::make($collection['password']);

            $profile = new Admin($collection->all());

            $profile->save();

            return $profile;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }



    /**
     * @param array $params
     * @return Message|mixed
     */
    public function createMessage(array $params)
    {
        try {
            $collection = collect($params);

            $message = new Message($collection->all());

            $message->save();

            return $message;

        } catch (QueryException $exception) {
            throw new InvalidArgumentException($exception->getMessage());
        }
    }


    public function changePassword(array $params){

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        
    }

    


}
