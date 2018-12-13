<?php

namespace TastyRecipe\Integration;

use TastyRecipe\Model\Comment;

class CommentStore
{

    const FILE_DIR = 'commentData/';
    const PATH_TO_APP_ROOT = '/../../../';

    private $folder_path;

    /**
     * CommentStore constructor.
     */
    public function __construct(){
        $this->folder_path = __DIR__ . self::PATH_TO_APP_ROOT . self::FILE_DIR;
    }

    /**
     * get name of recipe
     * @param $fileDist
     * @return filename if match is found else false
     */
    public static function getFilePath($fileDist){
        if($fileDist == 'Meatballs') {
            return 'commentsMeatballs.txt';
        }
        elseif ($fileDist == 'Pancakes'){
            return 'commentsPancakes.txt';
        }
        return NULL;
    }

    /**
     * get comments from file specified in param
     * @param $fileDist
     * @return array comments in form of array of type Comment
     */
    public function getComments($fileDist){
        $fileDist = self::getFilePath($fileDist);
        $comments = array();
        $commentsInFile = explode(KEY_COMMENT_DELIMITER, file_get_contents($this->folder_path . $fileDist));
        foreach($commentsInFile as $commentInFile){
            $comment = unserialize($commentInFile);
            if($comment instanceof Comment and !$comment->isDeleted()){
                array_push($comments, $comment);
            }
        }
        return $comments;
    }

    /**
     * Set delete status on comments from file specified in param
     * @param $fileDist
     * @param int $timestamp
     */
    public function deleteComment($fileDist, int $timestamp){
        $fileDist = self::getFilePath($fileDist);
        $commentsInFile = explode(KEY_COMMENT_DELIMITER, file_get_contents($this->folder_path . $fileDist));

        for ($i = count($commentsInFile) - 1; $i >= 0; $i--) {
            $comment = unserialize($commentsInFile[$i]);
            if ($comment instanceof Comment and ($comment->getTimestamp() === $timestamp)) {
                $comment->setDeleted(true);
                $commentsInFile[$i] = serialize($comment);
                break;
            }
        }
        file_put_contents($this->folder_path . $fileDist, implode(KEY_COMMENT_DELIMITER, $commentsInFile));
    }

    /**
     * Stores comments in file specified in param
     * @param $fileDist
     * @param Comment $comment comment to store
     */
    public function storeComment($fileDist, Comment $comment){
        $fileDist = self::getFilePath($fileDist);
        file_put_contents($this->folder_path . $fileDist,serialize($comment) . KEY_COMMENT_DELIMITER, FILE_APPEND);
    }
}
