<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class Watermarks implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // private $fileName;
    private $item_image_id;


    /**
     * Create a new job instance.
     */
    public function __construct($item_image_id)
    {
        $this->item_image_id = $item_image_id;
    }

     
public function handle(){
    $i = Image::find($this->item_image_id);
        
        if(!$i){
            return;
        }

        $srcPath = storage_path('app/public/' . $i->path);


        $image = SpatieImage::load($srcPath)
            ->watermark(base_path('resources/img/watermark.png'))
            ->watermarkHeight(15, Manipulations::UNIT_PERCENT)
            ->watermarkWidth(15, Manipulations::UNIT_PERCENT)
            ->watermarkPadding(1, 18, Manipulations::UNIT_PERCENT)
            ->watermarkOpacity(30)
            ->save();
    }
}
