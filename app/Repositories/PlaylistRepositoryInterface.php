<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Video;

interface PlaylistRepositoryInterface
{
    public function getAllVideosByUser(User $user);
    public function getVideosByUserFiltered(User $user, $filter);
    public function createPlaylist(User $user);
    public function updatePlaylist(User $user, Video $video);
    public function deletePlaylist(User $user, $playlistId);
    public function deleteVideoFromPlaylist(User $user, $playlistId, $videoId);

}
