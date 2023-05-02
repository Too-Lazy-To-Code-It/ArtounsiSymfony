StarRatingBundle
================

Star Rating Bundle for Symfony 5.  Requires Jquery and Bootstrap icon.

Sample Output
=============

![alt tag](https://s3-us-west-2.amazonaws.com/derick-misc/StarRating.png)

Installation
============

### Step 1: Download the StarRatingBundle

***Using Composer***

Add the following to the "require" section of your `composer.json` file:

```
    "sbyaute/star-rating-bundle": "1.*"
```

### Step 2: Enable the bundle

Enable the bundle in the kernel:

```php
<?php
// app/appKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new sbyaute\StarRatingBundle\StarRatingBundle(),
    );
}
```

Add the config for TWIG:

```yaml 
twig:
    paths:
        '%kernel.project_dir%/vendor/sbyaute/star-rating-bundle/Resources/views': SbyauteStarRatingBundle
```

### Step 3: Add the css

Add the css in your page head

```
  <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />
```

### Step 4: Add the js

Add the javascript to your page head
```
    <!-- make sure that jquery is included --!>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="{{ asset('bundles/starrating/js/rating.js') }}"></script>
```

Usage
=====

### In a Form

```php
<?php
    // ...
    $builder->add('rating', StarRatingType::class, [
    	'label' => 'Rating'
    ]);
    // ...
```
or for a custom rating scale:
```php
<?php
    // ...
    $builder->add('rating', StarRatingType::class, [
    	//...
    	'stars' => 4,
    	//...
    ]);
    // ...
```

### Display in a twig template using the rating filter
```
    // ...
    {{ someInteger|rating }}
    // ...
```

or if you are not using a 5 star scale
```
{{ someInteger|rating(4) }}
```

if you want to use the [font awesome icon sizes](http://fortawesome.github.io/Font-Awesome/examples/#larger)
```
{{ someInteger|rating(5, "fa-3x") }}
```
If you want the smallest size use "fa-norm" (in font awesome, this would be the same as not providing an size class); providing no size argument sets the font size to 25px which is somewhere in between "fa-lg" and "fa-2x".
To customize the size, feel free to override the css.

License
=======
This bundle is under the MIT license. See the complete license in the bundle:
    LICENSE
