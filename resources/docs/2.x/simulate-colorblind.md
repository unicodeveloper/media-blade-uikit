# Simulate Colorblind

The `x-cld-image` component has a `simulate-colorblind` attribute. It simulates the way an image would appear to someone with the specified color blind condition.

The color blind possible values to simulate for now are: `deuteranopia`, `protanopia`, `tritanopia`, `tritanomaly`, `deuteranomaly`, `cone_monochromacy`, and `rod_monochromacy`.

## Usage

<em><strong>Before:</strong></em>
<img src="https://res.cloudinary.com/unicodeveloper/image/upload/lady">


<em><strong>Apply the simulate-colorblind:</strong></em>
```html
<x-cld-image public-id="lady" simulate-colorblind="protanopia"/>
```

This will output the following image:

<img src="https://res.cloudinary.com/unicodeveloper/image/upload/e_simulate_colorblind:protanopia/lady?_a=AACnOBs">