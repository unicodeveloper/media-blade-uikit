# Introduction

Media Blade UI Kit is a set of renderless media components to utilise in your Laravel Blade views. It was made for [Blade](https://laravel.com/docs/blade), Laravel's powerful templating engine.

The components are renderless, meaning they ship without any styling applied to them. This puts you in full control of how they look and feel.

The Kit ships with `x-cld-upload-button`, `x-cld-image`, and `x-cld-video` Blade components out of the box.

Take a look at an example usage of the `x-cld-upload-button` component.

- Add the `@cloudinaryJS` directive in the app's head section like so:

```html
<!DOCTYPE html>
<html>
    <head>
        @cloudinaryJS
    </head>
</html>
```

- Next, use the `x-cld-upload-button` component.

```html
<body>
    <x-cld-upload-button>
        Upload Files
    </x-cld-upload-button>
</body>
```

By default, it will appear this way below. Renderless. No style.

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/v1661754668/renderless_upload_files.png">

Let's style it a bit with TailwindCSS and the `class` attribute.

```html
<x-cld-upload-button class="mb-5 inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg">Upload Files</x-cld-upload-button>
```

This will output the following:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/v1661754371/upload_files.png">


- Click on the `Upload Files` button. An upload widget will come up that ships with an option to upload single and multiple files from multiple sources. Now, drag and drop or browse to upload as many files as you want.

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/v1661754895/multiple_uploads_widget.png">

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

