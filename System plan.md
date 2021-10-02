# 1. Overview 

## 1.1 About this document

Our team accepted a commission to make a fully functional website for people who are interested in music. In this online webshop they can see artists and their new albums, with the lyrics for their top songs. They also can become musicians via creating their own music with our shop that includes all music instruments.
This document describes the project in detail, including the website's functionality, the team members, their roles and responsibilities, technologies we use in this project, development plans etc.

## 1.2 Project Overview:

The development team uses multiple technologies and software that are described in this document. Furthermore, the Business Requirements, the development phases and goals of this project will be documented here.

The following resources and documents will be used during the development:

- The Functional Requirements of the project

- The features requested by the clients

- The database structure and plan

- The laws and industry standards that this project is subjected

- Regulations

- Terms and conditions

- Cookies

- Logging

- Privacy policies like: advertising policies and third party privacy policies

- CCPA and GDPR data protection rights

Some additional information:

- We are responsible for a website, that introduces musicians with their songs, lyrics, bio etc.

- Show latest news about famous and most liked artists

- Enable commenting feature on each news article

- Develop a platform where users can choose from plenty of songs/artists.

- Get a long description about the chosen artist/song.

- Provide a comfortable learning experience.

# 2. Project plan
## 2.1 Roles and responsibilities
### Backend developer:
Backend developers are responsible for developing the server-side code, they create the website's functions, and the data structures. They mainly use PHP codes.

### Frontend developer:
Frontend developers implement the visual elements that users see and interact with in the website. They make sure that users have no trouble navigating the website. They use HTML, CSS, JavaScript codes.

### Database developer:
Database developers are responsible for the storage and management of the data we use in this website. 

## 2.2 Team members


## 2.3 Project schedule


## 2.4 Milestones


## 2.5 Technologies

### Web framework – Bootstap
Bootstap will be used to make the dynamic layout of the webshop, so it works smoothly on all resolutions in the browsers.

### Web server – Apache
An Apache web server will be used to store the database information, in which we will store the database writen in MySQL structure.

### Programming language – PHP
We are going to write our code in PHP, since it is the most used programming language for building websites.

### Communication – Discord, GitHub, Trello
- Discord is a communication software made for voice chat. Since Discord is free we are gonna use this software, because it is not sure that all of us will be in the same room when our company develops the webshop the client asked for. With this we will be able to communicate in real time with our coding partners, and since it has a normal chat function that follows the written messages, it will be easy to trace back with the problems that are brought up during development.

- GitHub is a free repository where the project will be stored during development. With this we can share and retrivel the versions of our work, and if something is not working we can reroll the changes so we don't have to start from the beginning.

- Trello is a free web-based Kanban-style list-making application. We can create our task boards with several columns and move the tasks between them. Typically columns include task statuses: To Do, In Progress and Done.

### Data structure store – MySQL
The database structure will be written accordig to the Laravel standards.


Recommended version: Latest Stable

# 3. Business model

# 4. Requirements

## 4.1 Functional Requirements

Using common website elements and user management system:

- Register: The users should have the opportunity to sign up. This way they are able to shop and use the shopping cart. After registration they will have an own Profile Page.

- Logging in and out: Editors and users should be able to log in and out.

- Possibility to change password: Users' passwords should be changeable.

- Profile details: Users should be able to see and modify the details on their Profile Page.

Webshop functions:

- Showing cards: Users can easily separate the songs and their descriptions if we show them as cards.

- Listing items, browsing: The user should be able to look around between the songs and filter them on the website.

- Favourite list: The client should be able to add songs to their list or remove them if necessary.

- Song details: The customer should be able to see our songs' details in a separate page.

## 4.2 Non-funtional Requirements

The site must (be):

- Easy to use

- User-friendly

- Able to navigate to the corresponding pages

- Show error messages in different and consistent location and style

- Have control panels, buttons (some of them are hidden from the general users)

- Have permission system

- Fit the EU Privacy Policy requirements

Supported browsers:

- Mozilla Firefox

- Microsoft Edge

- Google Chrome

- Safari

## 4.3 Resources

- Fully functional database with tables and relations

- Secured connection

- Intuitive/easy to use interface

- Creative front-end palette

- Based on Laravel and PHP

# 5. Functions

## 5.1 Participants

This website has two user level:

- Customer

- Moderator

## 5.2 Use cases and scenarios

Customer:

- Able to register a new account

- Able to log in to their account

- Able to log out from their account

- Able to see the home page

- Able to see the songs lists according to the category

- Can filter through the songs

- Can open a song and see it's detailed description page

- Able to add songs to their list

- Able to see thir profile

Manager:

- Has all the user privileges

- Able to add a new songs to all of the categories

- Can modify an existing song

- Able to remove a song

# 6. Physical environments
This application was made for web platform and should be used with the supported web browsers.

**Software and external systems we're working with:**
- Sublime Text Editor (for PHP)
- Gitkraken/Github for documentation
- Trello
- Visual Studio Code
- Discord
- Markdown Monster
- Stackedit.io


**Hardware and Network:**
- General hardware and network requirements

**Development tools:**
- Visual Studio Code
- Sublime Text Editor

**Technologies:**
- Laravel: Web development framework, it is used to build dynamic webiste quickly.
- Bootstrap: Web framework, it is used to make the dynamic layout of the website. It works well with different resolutions and browsers.
- Apache: The Apache web server is used to store, process and deliver the webpage to the browsers.
- PHPMyAdmin: Administration tool for MySQL and MariaDB database server, where we store the data of our website, including editors account data and the articles.
- MySQL: The database structure will be implemented according to MySQL standards.
- PHP: The websties code will be implemented in PHP, which is the most popular way of building website.


# 7. Architecture plan
## 7.1 Backend
The system needs a database system, in this case the team uses a Visual Studio based client, where we store the user's data and the products. Web Client: The client is based on PHP technologies, which helps the client to be stable. On the other hand we can create creative and spectacular content for our users. Furthermore, it will be used to create the website's functions, handle user data and article content.
## 7.2 Frontend
The frontend uses CSS, HTML and JavaScript codes and using Bootstrap as its framework, which helps to create a modern looking website and works well cross-platform.
# 8. Database plan

## 8.1 Tables

### Users

Users are registered accounts on the website. Their data of favorite songs is stored on our database.
- **id:** A unique identification number that is assigned at registration to every user. 
- **username:** A unique name the user chooses for their account name, it is required for user to log in to their account
- **password:** A one way hashed password that is needed to log in to an account.
- **first_name:** First name of the user as filled in the registration form
- **last_name:** Last name of the user as filled in the registration form
- **email:** Email address of the user. It's used for sending order and account information.
- **birthdate:** Date of birth of the user. 
- **Regdate:** Date of registration. Filled out automatically.
- **Level:** Permission level of the user. More levels can be added later.
	- 0 = User
	- 1 = Moderator
	
### Songs
Songs are songs that are being stored in the website.
- **id:** An unique identification number, that is automatically incremented.
- **name:** The name of the product.
- **author:** The performer of the product.
- **img:** A path that shows the location of and image of the song/album cover
- **genre:** The main genre of the product. 


## 8.2 Helper tables


## 8.3 Laravel Implementation

# 9. Implementation plan
During the implementation we will work mainly with php, html and css codes. First steps are the database implementation with all the tables, and after that we can work on the website itself. For all the pages, the backend will be implemented first, since this website uses the database heavily and most of the website content stored there. After the backend, the frontend will be implemented using the backend data. The frontend uses bootstrap framework with the grid layout system.
# 10. Test plan

## Test methods
(Later it will change a lot)

* Database Import
* Database Reach
* Logout Reach
* Carousel Test
* Genre tree Test (All genres works properly)
* Login page Test
* Song page Test
* Add Cart page Test
* Forgot password Test
* Main Page Test
* Register Page Test
* Registration Test