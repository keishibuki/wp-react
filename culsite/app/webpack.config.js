module.exports = {
  entry: {
    app: "./src/index.js"
  },
  output: {
    path: __dirname + '/../dist',
    filename: "[name].js"
  },
  devServer: {
    contentBase: __dirname + '/public',
    port: 8080,
    publicPath: '../dist/'
  },
  devtool: "eval-source-map",
  mode: 'development',
  module: {
    rules: [
      {
        test: /\.jsx*$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx']
  },
};
