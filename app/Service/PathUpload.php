<?php
namespace App\Service;
/**
 *
 */
/**
 *
 */
class PathUpload
{
  private $request;
  private $dossier;

  function __construct($request, $dossier)
  {
    $this->request = $request;
    $this->dossier = $dossier;
  }

  public function path()
  {
    $path = 'upload/' . $this->dossier . '/' . date('Y') . '/' . date('m');
    return $path;
  }

  public function originalName()
  {
    return $this->request->getClientOriginalName();
  }



  private function generatelittleslug()
  {
    $text = substr($this->originalName(),0,10);
    $text = trim($text);
    $text = str_slug($text);
    return $text;
  }
  public function imageName()
  {
    $name = $this->generatelittleslug() . '-' . time() . '.' .$this->request->getClientOriginalExtension();
    return $name;
  }
}
