# About project

ProSimRacing - simracing portal, where you can see articles, reviews, coverages about simracing, virtual autosport, etc. 

**The project is currently frozen**.

# Installation and required packages

## cviebrock/eloquent-sluggable package

You need to install sluggable package with this command. Lates support version is 8.0.8 with support PHP 8.0

```
composer require cviebrock/eloquent-sluggable 8.0.8 
```

You can see version of sluggable package in [this link](https://github.com/cviebrock/eloquent-sluggable/blob/master/CHANGELOG.md). Link for package [GitHub](https://github.com/cviebrock/eloquent-sluggable).

## Settings

file env 
```
FILESYSTEM_DRIVER=public
```

file config->filesystem 
```
'public' => [
            'driver' => 'local',
            'root' => 'uploads',
            'url' => env('APP_URL').'/public',
            'visibility' => 'public',
        ],
```
