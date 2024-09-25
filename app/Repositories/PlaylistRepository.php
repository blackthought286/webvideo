<?php

namespace App\Repositories;

use App\Models\UserPlaylist;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Eloquent\Model;

class PlaylistRepository implements PlaylistRepositoryInterface
{
    protected UserPlaylist $_playlist;

    public function __construct(UserPlaylist $playlist)
    {
        $this->_playlist = $playlist;
    }
    public function getAllVideosByUser(User $user)
    {
        return $user::query()->find($user->id);
    }

    public function getVideosByUserFiltered(User $user, $filter)
    {
        // TODO: Implement getVideosByUserFiltered() method.
    }

    public function createPlaylist(User $user)
    {
        // TODO: Implement createPlaylist() method.
    }

    public function updatePlaylist(User $user, Video $video)
    {
        // TODO: Implement addVideoToPlaylist() method.
    }

    public function deletePlaylist(User $user, $playlistId)
    {
        // TODO: Implement deletePlaylist() method.
    }

    public function deleteVideoFromPlaylist(User $user, $playlistId, $videoId)
    {
        // TODO: Implement deleteVideoFromPlaylist() method.
    }
}
