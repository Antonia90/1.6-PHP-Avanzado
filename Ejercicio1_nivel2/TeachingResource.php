<?php
require_once 'Subject.php';
require_once 'Resource.php';

class TeachingResource
{
    public string $name;
    public Subject $subject;
    public string $url;
    public Resource $resource;

    public function __construct(string $name, Subject $subject, string $url, Resource $resource)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->url = $url;
        $this->resource = $resource;
    }

    public function __toString(): string
    {
        return "Nombre: {$this->name}<br>" .
            "Tema: {$this->subject->name}<br>" .
            "URL: {$this->url}<br>" .
            "Recurso: {$this->resource->name}<br>";
    }
}
