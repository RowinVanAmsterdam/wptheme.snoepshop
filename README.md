# Readme 

## Tools to run WP locally
- MAMP
- Ngrok OR localtunnel (tool to make localhost available over the internet)
- Relative URL (WP plugin, to make URL paths from wordpress relative)

## Styling
SASS is used for styling, to compile it during development you have to run a script. See chapter 'Run' for this. 

## Test (Mollie) webhook locally: 
To interact locally with a webhook you should make use of a tool to make localhost available over the internet. Use Ngrok or localtunnel for this. Currently Ngrok is not working, but Localtunnel is. 

### Installation
Make and/or install WordPress locally using MAMP. Clone this project and place it in the themes folder of the WordPress installation. Make the theme active in your local WordPress admin panel. After that create in the admin panel new pages and connect the right template to each (new) page. So the coded pages are connected to the pages that are created in the admin panel. 

- Run `npm install` in the theme folder (with package.json)

Make sure Ngrok and/or Localtunnel is installed globally: 

#### Ngrok
https://ngrok.com/download

#### Localtunnel
`npm install -g localtunnel`
https://www.npmjs.com/package/localtunnel

### Run
- Start MAMP server 
- Run `npm run start` to start the SCSS compiler

#### Share localhost app over the internet
##### Ngrok
- Run `npm run ngrok` to share the localhost app over the internet using Ngrok (Not working atm).

Will run:
ngrok http --host-header=myapp.dev 8888
^ Will connect to Mollie webhook, but will return you to not existing webpage: myapp.dev:8888/xxx/xxx/xxx

You can also use rewrite to tell ngrok to use the local address hostname.
ngrok http --host-header=rewrite 8888
^ Will not connect to Mollie webhook. 

#### Localtunnel
- Run `npm run localtunnel` to share the localhost app over the internet using localtunnel. 

### Settings 
#### wp-config.php file
Add this piece of code at the top to set site url and home url dynamically.
```
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
```

## Sources
- https://ngrok.com/docs
