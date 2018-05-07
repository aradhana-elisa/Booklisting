Database File location
database/book_listing.sql

Run the file as : localhost/booklisting
booklisting is the name of the folder in which the file is

Project Name: BookListing
Team Members:
Aradhana Elisa
Shifatul Islam	

Introduction:
Website for Books which can be magazines, textbook, storybook or comics. On the homepage there will be listing of all the books which can further be sorted/filtered out from the navigation. User can create his/her profile to add a new book to the website, he can edit his entered book at any time. Admin will the access to edit/delete book for any user.  
Main class: Books
Children class: Textbooks, Story books, comics, magazines.
Database Tables: Both working 
Books: Title, sub title, description, author, price, publisher, ISBN, cover(image), date created, date modified, isDeleted (bool), pages, number of views, userId (foreign key: user).
Textbook: Course
Storybook: Genre 
Magazine: Publish date
Comics: Type, Genre
Comments: userId (foreign key), username, isDeleted, bookId, comment text, date created.
User: username, firstname, lastname, email address, gender, dob, password, account type, profile pic.

Pages to be created on the website:
Login/Register
Homepage
4 pages for all the categories: comics, textbooks, storybooks and magazine
Create a new book page
individual books page
user profile page 
About us

Functions:
Login/Register 
Retrieve the information for the user on the user profile page
User’s information can be edited by the admin
User can edit his own info
Sort for the Books – date created, price 
Books- Create books
Shows listing of the books by category- story books, textbooks, comics and magazines
View and edit books for the same user
Admin can edit/delete book for any user
Search for books - title

Both 
Comments: Add comments

