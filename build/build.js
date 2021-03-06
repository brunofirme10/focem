'use strict'
require('./check-versions')()

process.env.NODE_ENV = 'production'

const ora = require('ora')
const rm = require('rimraf')
const path = require('path')
const chalk = require('chalk')
const webpack = require('webpack')
const config = require('../config')
const webpackConfig = require('./webpack.prod.conf')

const spinner = ora('Só um momento, estamos processando seus arquivos..')
spinner.start()

rm(path.join(config.build.assetsRoot, config.build.assetsSubDirectory), err => {
  if (err) throw err
  webpack(webpackConfig, (err, stats) => {
    spinner.stop()
    if (err) throw err
    process.stdout.write(stats.toString({
      colors: true,
      modules: false,
      children: false, // If you are using ts-loader, setting this to true will make TypeScript errors show up during build.
      chunks: false,
      chunkModules: false
    }) + '\n\n')

    if (stats.hasErrors()) {
      console.log(chalk.red('Ocorreram alguns erros.. \n'))
      process.exit(1)
    }

    console.log(`
    ${chalk.green(`
      $$\\      $$\\  $$$$$$\\  $$\\    $$\\ $$$$$$$$\\ $$$$$$$$\\             
      $$ | $\\  $$ |$$  __$$\\ $$ |   $$ |$$  _____|\\____$$  |            
      $$ |$$$\\ $$ |$$ /  $$ |$$ |   $$ |$$ |          $$  /             
      $$ $$ $$\\$$ |$$$$$$$$ |\\$$\\  $$  |$$$$$\\       $$  /              
      $$$$  _$$$$ |$$  __$$ | \\$$\\$$  / $$  __|     $$  /               
      $$$  / \\$$$ |$$ |  $$ |  \\$$$  /  $$ |       $$  /                
      $$  /   \\$$ |$$ |  $$ |   \\$  /   $$$$$$$$\\ $$$$$$$$\\ $$\\  
      \\__/     \\__|\\__|  \\__|    \\_/    \\________|\\________|\\__|     \n`)}
    ${chalk.yellow.bold(`
      Pronto! Projeto compilado! \n
    `)}
    `)
  })
})
