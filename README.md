# Caritas Sant Josep de Badalona 


## Team
- [Alvaro ](https://github.com/raykotab)
- [Gabri](https://github.com/G4BR1TRZ)
- [Giacomo](https://github.com/pilpod)
- [Rene](https://github.com/renejfc)
- [Vanessa](https://github.com/vanessacor)


## Description

The aim of this project was to build the webpage for Caritas of S. Josep of Badalona for the Tarjetas Monedero project.
The project requirements were:
- A webpage to display information about caritas S.Joseph that highlights the Donate Action.
- The webpage should have 3 main sections: Homepage, about and how to participate.
- Must have a call to action so users can easily find information on how to donate to the project.
- The application should serve as a template for other similar organizations.
- Must have a backoffice where the organizations can manage the content namely: contact details, bank account, About and How to participate sections. 
- The design should mainly follow the style of Caritas, but customized in the details.


## Methodologies of work

- Agile following the Scrum framework with sprints of one week
- Test Driven Development
- Pair Programming

## Technologies

- [Laravel 8](https://laravel.com/).
- [MySQL](https://www.mysql.com/).

## Required

- PHP 7.4
- Composer ^2.0
- npm ^6.14

## Dependencies

- [Fortify](https://laravel.com/docs/8.x/fortify)
- [Tailwind ](https://tailwindcss.com/)
- [Dusk](https://laravel.com/docs/8.x/dusk)

## Getting Started


- instal all composer packages

    ```
    composer install
    ```

- create a .env file and set up your database 

    ```
    cp .env.example .env 
    ```

- generate artisan key

    ```
    php artisan key:generate
    ```

- run all the migrations

    ```
    php artisan migrate
    ```

- run all the seeders

    ```
    php artisan db:seed
    ```

- install all npm packages

    ```
    npm install
    ```

- build 

    ```
    npm run dev
    ```

## Run Tests

```
php artisan test
```
- For setting up Dusk testing you may need another .env file for that case


## Project Structure

### Backoffice
- All actions performed by Admin are:
    - Served by main path ``` /dashboard ```
    - Also accessible under ```/login```
    - Protected by Admin middleware

- Admin user can:
    - create organization Profile
    - update organization Profile
    - upload  and change organization Logo
    - upload content to the sections in both languages
    - upload a image for each section
    
 ### Frontend Structure
 
 - Visual elements are created as components for better maintenance
 - Colors and Fonts available through tailwind are limited to the ones used in the project (see ```tailwind.config.js```)
 - For aplying we oriented the styles around ```lg``` Breaking Point of tailwind, so everything underneath is mobile view (standard label) leaving destop view for everything over ```lg``` (class:"lg:style-for-desktop)

### Public page

- There is only one main view ```landing.blade.php```
- All other content is structured in components that are rendered on the same page.
- In order for the Webpage to show, some contents MUST be present in the database first:

    - Organization Profile Details
    - Qui Som
    - Qui Pots fer Tu

- Following the instructions for achieving this.


## To customize the page the organization needs to:

- In order to the webpage to be able to render the Admin MUST FIRST add the content and the images for all the sections
- Admin needs to Register (under ```/register```)
- This route will be available only once
- Admin can then login (under ```/login```)
- Admin then needs to create the organization profile
- Upload Logo
- Uploaded images are limited to 500 KB in order to avoid a slowing down the page.
- Once the profile is created, Admin can only update the profile (can't be deleted)
- If an Admin forgets his password, could be recovered through the forgot password link.