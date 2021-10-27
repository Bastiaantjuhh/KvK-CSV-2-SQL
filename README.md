# KvK-CSV-2-SQL
Small script for importing the KvK (Dutch Chamber of Commerce) Open Data Set (CSV file) to a MySQL database.

## Table of content
- [KvK-CSV-2-SQL](#kvk-csv-2-sql)
  - [Table of content](#table-of-content)
  - [Features](#features)
  - [Screenshots](#screenshots)
  - [Guide](#guide)
  - [Repository summary](#repository-summary)
  - [License](#license)

## Features
- Splitting the huge CSV into smaller readable files
- Importing the files to a MySQL server

## Screenshots
![Screenshot](/.github/screenshot.png "Screenshot")

## Guide
1. Clone or download the repo
2. Install dependencies
    ```bash
    composer install
    ```
3. If you did't downloaded the Open Data set yet, go download it. Place it in the ```./data``` directory.
4. Place it in the ```kvk``` directory
5. Run the ```split.sh``` script in terminal, wait till this process is done.
6. Edit the ```config.php``` file and edit the MySQL database credentials. 
7. Import the MySQL database scheme to the database. This is the ```database.sql``` file.
8. Run the import script in terminal
   ```bash
    php cli.php
    ```

## Repository summary

Description | Status
---- | ------
License | ![GitHub](https://img.shields.io/github/license/Bastiaantjuhh/KvK-CSV-2-SQL)
Commits | ![GitHub commit activity](https://img.shields.io/github/commit-activity/m/Bastiaantjuhh/KvK-CSV-2-SQL)
Language | ![GitHub top language](https://img.shields.io/github/languages/top/Bastiaantjuhh/KvK-CSV-2-SQL)
Open issues | ![GitHub issues](https://img.shields.io/github/issues/Bastiaantjuhh/KvK-CSV-2-SQL)
Closed issues | ![GitHub closed issues](https://img.shields.io/github/issues-closed/Bastiaantjuhh/KvK-CSV-2-SQL)
Pull requests | ![GitHub pull requests](https://img.shields.io/github/issues-pr-raw/Bastiaantjuhh/KvK-CSV-2-SQL)
Closed pull requests | ![GitHub closed pull requests](https://img.shields.io/github/issues-pr-closed-raw/Bastiaantjuhh/KvK-CSV-2-SQL)

## License
This project is licensed under the [MIT License](https://github.com/Bastiaantjuhh/KvK-CSV-2-SQL/blob/master/LICENSE). You are encouraged to embed the project into your other projects, as long as the license permits.

> MIT License
> 
> Copyright (c) 2021 Bastiaan de Hart
> 
> Permission is hereby granted, free of charge, to any person obtaining
> a copy of this software and associated documentation files (the
> "Software"), to deal in the Software without restriction, including
> without limitation the rights to use, copy, modify, merge, publish,
> distribute, sublicense, and/or sell copies of the Software, and to
> permit persons to whom the Software is furnished to do so, subject to
> the following conditions:
> 
> The above copyright notice and this permission notice shall be
> included in all copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
> EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
> MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT.
> IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY
> CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT,
> TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE
> SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
