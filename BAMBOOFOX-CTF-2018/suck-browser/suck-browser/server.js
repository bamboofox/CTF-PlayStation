const http = require('http')
const parser = require('ua-parser-js')
const fs = require('fs')

const flag = fs.readFileSync(`${__dirname}/flag`)

const server = http.createServer(async (req, res) => {
    const ua = parser(req.headers['user-agent'])
    const {browser} = ua
    if (JSON.stringify(browser) === JSON.stringify({})) {
        res.end(`${flag}`)
    }
    else {
        res.end('I hate browser. It sucks.')
    }
})

server.listen('7777', '0.0.0.0')
