<script>
dataServiceFiles = {
  'index-html': {
    'name': 'index.html'
  },
  'index-js': {
    'name': 'index.js'
  },
  'shapes-js': {
    'name': 'shapes.js'
  },
  'area-calculator-js': {
    'name': 'areaCalculator.js'
  },
  'area-oputter-js': {
    'name': 'areaOputter.js'
  },
  'bundle-js': {
    'name': 'bundle.js'
  },
  'bundle-js-map': {
    'name': 'bundle.js.map'
  },
  'webpack-config-js': {
    'name': 'webpack.config.js'
  },
  'package-json': {
    'name': 'package.json'
  }
};
</script>
<div style="display: none;">
  <div data-file="index-html">&lt;!DOCTYPE html&gt; 
&lt;html&gt; 
&lt;head&gt; 
  &lt;meta charset=&quot;utf-8&quot;&gt; 
  &lt;meta http-equiv=&quot;X-UA-Compatible&quot; content=&quot;IE=edge&quot;&gt; 
  &lt;title&gt;Single responsibility principle&lt;/title&gt; 
&lt;/head&gt; 
&lt;body&gt; 
  &lt;p&gt;Check console for details&lt;/p&gt; 
  &lt;div id=&quot;areas_sum&quot;&gt;&lt;/div&gt; 
  &lt;script type=&quot;text/javascript&quot; src=&quot;dist/bundle.js&quot;&gt;&lt;/script&gt; 
&lt;/body&gt; 
&lt;/html&gt;</div>
  <div data-file="index-js">// https://medium.com/@cramirez92/s-o-l-i-d-the-first-5-priciples-of-object-oriented-design-with-javascript-790f6ac9b9fa
import { circle, square, rect } from './shapes';
import { areaCalculator } from './areaCalculator';
import { areaOputter } from './areaOputter';

const shapes = [
  circle(0.5),
  square(5),
  rect(10, 5),
  square(7)
];

const areas = areaCalculator(shapes);
const output = areaOputter(areas);

console.log(output.JSON());
output.HTML(document.getElementById('areas_sum'));
//output.ALERT()</div>
  <div data-file="shapes-js">export const circle = (radius) => {
  const proto = {
    type: 'Circle'
  }
  return Object.assign(Object.create(proto), {radius})
}
export const square = (length) => {
  const proto = {
    type: 'Square'
  }
  return Object.assign(Object.create(proto), {length})
}
export const rect = (a, b) => {
  const proto = {
    type: 'Rect'
  }
  return Object.assign(Object.create(proto), {a, b})
}</div>
  <div data-file="area-calculator-js">export const areaCalculator = (s) => {
  const proto = {
    sum() {
      let sum = 0;

      s.forEach(el => {
        switch (el.type) {
          case 'Circle':
            sum += Math.PI * (+el.radius * +el.radius);
            break;
          case 'Square':
            sum += +el.length * +el.length;
            break;
          case 'Rect':
            sum += el.a * el.b;
            break;
          default:
            console.log(`Add case for type ${el.type}`);
        }
      });

      return sum;
    }
  }
  return Object.assign(Object.create(proto), {shapes: s})
}</div>
  <div data-file="area-oputter-js">export const areaOputter = (areas) => {
  const proto = {

    JSON() {
      const res = {
        'sum': this.areas.sum()
      };
      return res;
    },

    HTML(container) {
      const res = `&lt;h2&gt;Total area of the shapes: ${this.areas.sum()}&lt;/h2&gt;`;
      container.innerHTML = res;
    },

    ALERT() {
      const res = `Total area of the shapes: ${this.areas.sum()}`;
      alert(res);
    }
  }
  return Object.assign(Object.create(proto), {areas: areas})
}</div>
  <div data-file="bundle-js">!function(e){var t={};function r(n){if(t[n])return t[n].exports;var a=t[n]={i:n,l:!1,exports:{}};return e[n].call(a.exports,a,a.exports,r),a.l=!0,a.exports}r.m=e,r.c=t,r.d=function(e,t,n){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var a in e)r.d(n,a,function(t){return e[t]}.bind(null,a));return n},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="/dist/",r(r.s=0)}([function(e,t,r){"use strict";r.r(t);var n,a,c,o,u,s=function(e){return Object.assign(Object.create({type:"Square"}),{length:e})},i=[(c=.5,Object.assign(Object.create({type:"Circle"}),{radius:c})),s(5),(n=10,a=5,Object.assign(Object.create({type:"Rect"}),{a:n,b:a})),s(7)],f=function(e){var t={JSON:function(){return{sum:this.areas.sum()}},HTML:function(e){var t="&lt;h2&gt;Total area of the shapes: ".concat(this.areas.sum(),"&lt;/h2&gt;");e.innerHTML=t},ALERT:function(){var e="Total area of the shapes: ".concat(this.areas.sum());alert(e)}};return Object.assign(Object.create(t),{areas:e})}((o=i,u={sum:function(){var e=0;return o.forEach(function(t){switch(t.type){case"Circle":e+=Math.PI*(+t.radius*+t.radius);break;case"Square":e+=+t.length*+t.length;break;case"Rect":e+=t.a*t.b;break;default:console.log("Add case for type ".concat(t.type))}}),e}},Object.assign(Object.create(u),{shapes:o})));console.log(f.JSON()),f.HTML(document.getElementById("areas_sum"))}]);</div>
<div data-file="bundle-js-map">{"version":3,"sources":["webpack:///webpack/bootstrap 688e386a47f09f0935f2","webpack:///./src/index.js"],"names":["sayHello","console","log"],"mappings":";AAAA;AACA;;AAEA;AACA;;AAEA;AACA;AACA;;AAEA;AACA;AACA,uBAAe;AACf;AACA;AACA;;AAEA;AACA;;AAEA;AACA;;AAEA;AACA;AACA;;;AAGA;AACA;;AAEA;AACA;;AAEA;AACA;;AAEA;AACA;;;;;;;;;;;;ACtCA,KAAMA,WAAW,SAAXA,QAAW,GAAM;AACnB;AACAC,aAAQC,GAAR,CAAY,uBAAZ;AACAD,aAAQC,GAAR,CAAY,6BAAZ;AACH,EAJD;;AAMAF,Y","file":"bundle.js","sourcesContent":[" \t// The module cache\n \tvar installedModules = {};\n\n \t// The require function\n \tfunction __webpack_require__(moduleId) {\n\n \t\t// Check if module is in cache\n \t\tif(installedModules[moduleId])\n \t\t\treturn installedModules[moduleId].exports;\n\n \t\t// Create a new module (and put it into the cache)\n \t\tvar module = installedModules[moduleId] = {\n \t\t\texports: {},\n \t\t\tid: moduleId,\n \t\t\tloaded: false\n \t\t};\n\n \t\t// Execute the module function\n \t\tmodules[moduleId].call(module.exports, module, module.exports, __webpack_require__);\n\n \t\t// Flag the module as loaded\n \t\tmodule.loaded = true;\n\n \t\t// Return the exports of the module\n \t\treturn module.exports;\n \t}\n\n\n \t// expose the modules object (__webpack_modules__)\n \t__webpack_require__.m = modules;\n\n \t// expose the module cache\n \t__webpack_require__.c = installedModules;\n\n \t// __webpack_public_path__\n \t__webpack_require__.p = \"/dist/\";\n\n \t// Load entry module and return exports\n \treturn __webpack_require__(0);\n\n\n\n/** WEBPACK FOOTER **\n ** webpack/bootstrap 688e386a47f09f0935f2\n **/","const sayHello = () => {\n    /*eslint-disable no-console */\n    console.log(\"Allo! We are all set!\");\n    console.log(\"Arrow functions are working\");\n};\n\nsayHello();\n\n\n\n/** WEBPACK FOOTER **\n ** ./src/index.js\n **/"],"sourceRoot":""}</div>
<div data-file="webpack-config-js">module.exports = {
    entry: __dirname + '/src/index.js',
    output: {
        path: __dirname + '/dist',
        publicPath: '/dist/',
        filename: 'bundle.js'
    },
    module: {
        rules: [{
            test: /\.js$/,
            exclude: /node_modules/,
            use: 'babel-loader'
        }]
    }
};</div>
<div data-file="package-json">{
  "name": "es6-boilerplate",
  "version": "2.0.0",
  "description": "Standard ES6 Boilerplate configured with babel, webpack and eslint.",
  "main": "index.js",
  "scripts": {
    "start": "npm-run-all --parallel dev:server lint:watch",
    "dev:server": "webpack-dev-server --hot --inline",
    "watch": "webpack -w -d",
    "build": "webpack -p",
    "lint": "node_modules/.bin/esw webpack.config.* src --color",
    "lint:watch": "npm run lint -- --watch"
  },
  "keywords": [
    "es6"
  ],
  "author": "metagrover",
  "license": "ISC",
  "devDependencies": {
    "@babel/core": "^7.2.0",
    "@babel/preset-env": "^7.2.0",
    "babel-loader": "^8.0.4",
    "eslint": "^5.10.0",
    "eslint-watch": "^4.0.2",
    "npm-run-all": "^4.0.2",
    "redux": "^4.0.1",
    "webpack": "^4.27.1",
    "webpack-cli": "^3.1.2",
    "webpack-dev-server": "^3.1.10"
  }
}</div>
  <div data-file=""></div>
</div>
