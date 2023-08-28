const path = require( 'path' );

const JS_DIR = path.resolve( __dirname, '/src/js');
const IMG_DIR = path.resolve( __dirname, '/src/img');
const BUILD_DIR = path.resolve( __dirname, 'build');

const entry = {
    main: JS_DIR + '/main.js',
    single: JS_DIR + '/single.js',
};
const output = {
    path: BUILD_DIR,
    filename: 'js/[name].js',

};

module.exports = ( env, argv ) => ({
    entry: entry,
    output: output,

})
//usually would export an object, but in this situation we want it inside a function so that it can work for multiple environments