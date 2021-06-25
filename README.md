# laravel-pdf-to-image

Convert pdf files to images for Laravel 5


Laravel 5下的 PDF 转图片工具包，
<p>本包提供了Laravel 5 把pdf文件转换为图片的功能, 同时基于Laravel Storage 对生成的图片进行存储和管理。</p>
<h4>功能列表：</h4>
<ol>
<li>按页转换PDF文件为图片，每页生成1张图片</li>
<li>保存到指定的存储空间</li>
<li>支持云存储(测试中)</li>
<li>支持定时任务后台转换图片(开发中)</li>
<li>支持队列转换图片(开发中)</li>
</ol>
<h4>依赖 Package dependencies</h4>
<p>
   必须安装扩展包，You must install package imagick, 
  参考信息 more info: <a href="http://php.net/manual/en/book.imagick.php">http://php.net/manual/en/book.imagick.php</a>
<a href="http://php.net/manual/en/imagick.setup.php">http://php.net/manual/en/imagick.setup.php</a>
</p>
<p>
  "ext-imagick" : "*",<br/>
        "intervention/image": "^2.0",<br/>
        "illuminate/support": "5.*"<br/>
</p>
<p>
   执行 run:  php artisan vendor:publish --provider="Intervention\Image\ImageServiceProviderLaravel5" <br/>
   then： you will find a new file image.php in folder config. Change " 'driver' => 'gd' " to "  'driver' => 'imagick' "
</p>

## 安装Installation:
```
composer require wmlc/pdf2image
```

<h5>Laravel >= 5.5, after install nothing left to do.</h5>
<h5>Laravel <5.5</h5>
<p>
  Add a provider in providers array in config/app.php:<br/>
  wmlc\Pdf2Image\Pdf2ImageMaker::class,<br/>
  Add a aliase in aliases array:<br/>
  'PdfToImage'=>wmlc\Pdf2Image\Pdf2ImageFacade::class,
  
  
  </p>
  <p>
     
  </p>

## 用法

### Get pdf file pages count
```html
use Pdf2Image;

$pageCount = Pdf2Image::pdfFile(public_path() . "/imgs/test.pdf")->totalPages();
```

### Pdf all page to imgs
```html
use Pdf2Image;

Pdf2Image::pdfFile(public_path() . "/imgs/test.pdf")->saveImages();
```

### Pdf one page to img
```html
use Pdf2Image;

Pdf2Image::pdfFile(public_path() . "/imgs/test.pdf")->saveImage(0);

```
