import React, {StyleSheet, Dimensions, PixelRatio} from "react-native";
const {width, height, scale} = Dimensions.get("window"),
    vw = width / 100,
    vh = height / 100,
    vmin = Math.min(vw, vh),
    vmax = Math.max(vw, vh);

export default StyleSheet.create({
    "body": {
        "fontFamily": "'Quicksand', sans-serif"
    },
    "header": {
        "position": "relative",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto",
        "textAlign": "center",
        "paddingTop": 5,
        "paddingRight": 5,
        "paddingBottom": 5,
        "paddingLeft": 5
    },
    "nav": {
        "position": "relative",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto",
        "width": "100%",
        "height": "auto",
        "background": "red"
    },
    "nav ul": {
        "position": "relative",
        "marginTop": "auto",
        "marginRight": "auto",
        "marginBottom": "auto",
        "marginLeft": "auto",
        "width": "50%",
        "textAlign": "center"
    },
    "nav ul li": {
        "display": "inline-block",
        "width": "24%",
        "lineHeight": 50,
        "listStyle": "none"
    },
    "nav ul li a": {
        "color": "white",
        "textDecoration": "none"
    },
    "section": {
        "position": "relative",
        "paddingTop": 20,
        "paddingRight": 20,
        "paddingBottom": 20,
        "paddingLeft": 20
    }
});