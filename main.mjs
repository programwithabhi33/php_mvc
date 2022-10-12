import {readFile} from 'fs';
// let fs = require('fs')

// console.log(readFile)
// console.log(1+2+4/3)
let a = await readFile('main.tet', 'utf8');

console.log(a)