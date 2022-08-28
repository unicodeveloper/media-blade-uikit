# Introduction

Media Blade UI Kit is a set of renderless media components to utilise in your Laravel Blade views. It was made for [Blade](https://laravel.com/docs/blade), Laravel's powerful templating engine.

The components are renderless, meaning they ship without any styling applied to them. This puts you in full control of how they look and feel.

The Kit ships with `x-cld-upload-button`, `x-cld-image`, and `x-cld-video` Blade components out of the box.


Take a look at an example usage of the `x-cld-image` component.

```html
<x-cld-image public-id="couple" colorize="red_45" />
```

This will output the following HTML:

```html
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/co_red,e_colorize:45/couple">
```

As seen in the src attribute above, `unicodeveloper` is my Cloudinary account's <strong>cloud name</strong>.

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/co_red,e_colorize:45/couple">


The **x-cld-image** and **x-cld-video** components must always have the **public-id** attribute applied to them.

The attribute's value refer to the name of the asset (image or video) stored on Cloudinary. As seen above, **couple** is the name of the image stored and retrieved from Cloudinary (our asset storage server).

> **Note:** Without the **public-id**, there will be no media asset to filter, apply artistic effects, and chain transformations on. Very important!

