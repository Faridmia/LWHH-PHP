<?php

// class fileDisplay{

//     function display($file,$fileType){

//         if("mp4" == $fileType){
//             // video player
//         }elseif("mp3" == $fileType){
//             // audio player
//         }else{
//             // display text file
//         }
//     }

// }

class FileDisplay{

    function display(FileInterface $file){
        $file->display();
    }
}

interface FileInterface{
    function display();
}

class ImageFile implements FileInterface{
    function display(){
        // take necessary steps to display image
    }
}

class VideoFile implements FileInterface{
    function display(){
        // take necessary steps to display video
    }
}

class AudioFile implements FileInterface{
    function display(){
        // take necessary steps to display video
    }
}

$image = new ImageFile("abcd.jpg");
$video = new VideoFile("abcd.mp4");
$audio = new AudioFile("abcd.mp3");
$fd = new FileDisplay();

$fd->display($image);
$fd->display($video);
$fd->display($audio);

