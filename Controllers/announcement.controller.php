<?php
class AnnouncementContorller{
    static public function ctrShowAnnouncement($item,$value){
        $table = "announcement";
        $answer = AnnouncementModel::mdlShowAnnouncement($table,$item,$value);
        return $answer;
    }
}