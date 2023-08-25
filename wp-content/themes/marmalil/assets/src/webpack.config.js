const path = require( 'path' );

const JS_DIR = path.resolve( __dirname, '/src/js');

const entry = {
    main: JS_DIR + '/main.js',
    single: JS_DIR + '/single.js',
};
const output = {};

module.exports = ( env, argv ) => ({
    entry: entry,
    output: output,

})
//usually would export an object, but in this situation we want it inside a function so that it can work for multiple environments