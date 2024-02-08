// import * as monaco from 'monaco-editor';
// // or import * as monaco from 'monaco-editor/esm/vs/editor/editor.api';
// // if shipping only a subset of the features & languages is desired
// console.log("coucou");
// monaco.editor.create(document.getElementById('editorSQL'), {
// 	value: 'console.log("Hello, world")',
// 	language: 'javascript'
// });

//import CodeFlask from '../codeflask';
const {CodeFlask} = require('codeflask');
const editorElem = document.getElementById('editorSQL');
const flask = new CodeFlask(editorElem, { language: 'SQL' });