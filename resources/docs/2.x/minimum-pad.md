# Crop - Minimum Pad

The `x-cld-image` component has a `crop` attribute with a `mpad` value.

The `mpad` cropping mode behaves the same as the pad mode but only if the original image is smaller than the specified minimum (width and height), in which case the image is unchanged but padding is added to fill the specified dimensions.

This mode doesn't scale down the image if your requested dimensions are smaller than the original image's. You can also specify where the original image is placed by using the gravity parameter (set to center by default), and specify the color of the background in the case that padding is added.


## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the crop mpad:</strong></em>
```html
<x-cld-image public-id="lady" crop="mpad" width="200" height="200"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_mfit,h_200,w_200/lady?_a=AACnOBs">

<em><strong>Apply the crop mpad with a higher width and height than the original dimension:</strong></em>
```html
<x-cld-image public-id="lady" crop="mpad" bg-color="yellow" width="2000" height="2000"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/c_mpad,h_2000,w_2000/b_yellow/lady?_a=AACnOBs">