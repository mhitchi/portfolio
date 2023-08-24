const path = require( 'path' );

const JS_DIR = path.resolve( __dirname, '');

const entry = {
    main:
};
const output = {};

module.exports = ( env, argv ) => ({
    entry: entry,
    output: output,

})
//usually would export an object, but in this situation we want it inside a function so that it can work for multiple environments