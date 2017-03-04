
## About MyStockExchange



## Learning how use MyStockExchange



## Contributing

Thank you for considering contributing to the MyStockExchange project.

## Security Vulnerabilities

If you discover a security vulnerability within this project, please send an e-mail to Antoine MASLINE-CAMERINI at ....@gmail.com (soon add). All security vulnerabilities will be promptly addressed.

## License

The MyStockExchange project is open-sourced.

## Development 

#### Configure your host file
    
    127.0.0.1   mystockexchange.local   www.mystockexchange.local

#### Configure your vhost : 

    <VirtualHost *:80>
        ServerName localhost
        DocumentRoot /Library/WebServer/Documents/
    </VirtualHost>
    
    <VirtualHost *:80>
        ServerName mystockexchange.local
        ServerAlias www.mystockexchange.local
        DocumentRoot "/Users/antoinemaslinecamerini/Sites/mystockexchange/public"
    </VirtualHost>
