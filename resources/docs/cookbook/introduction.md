# Cookbook

This is a collection of examples using the Media Blade UI Kit components.


### 1. Face detection-based image cropping:

```html
<x-cld-image public-id="couple" crop="thumb" gravity="faces" width="100" height="100"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_thumb,g_faces,h_100,w_100/couple?_a=AACnOBs">

### 2. Limiting an image by specified dimensions:

```html
<x-cld-image public-id="cashew_chicken_mhzuik" crop="limit" width="1000" height="1000"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_limit,h_1000,w_1000/cashew_chicken_mhzuik?_a=AACnOBs">


### 3. Get an Image to be rounded:

```html
<x-cld-image public-id="finedog" crop="fill" round-corners width="200" height="200"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_fill,h_200,w_200/r_max/finedog?_a=AACnOBs">
