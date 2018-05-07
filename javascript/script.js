$('#delete-book')
    .api({
        url: document.location.href.substring(0, document.location.href.lastIndexOf("/")) +
        '/deletebook.php?id={value}',
        onSuccess: function (response) {
            if (response.success === true)
                window.location.href = document.location.href.substring(0, document.location.href.lastIndexOf("/")) +
                    '/index.php?msg=delete';
            else
                console.log('Failed to delete book!');
        }
    });

$('.message .close')
    .on('click', function () {
        $(this)
            .closest('.message')
            .transition('fade');
    });

$('.reply')
    .click(function () {
        $("#reply").focus();
    });

$('.ui.dropdown')
    .dropdown();

$('.ui.category.dropdown')
    .dropdown({
        onChange: function (val) {
            var $textbook = $(".info-textbook"),
                $storybook = $(".info-storybook"),
                $magazine = $(".info-magazine"),
                $comic = $(".info-comic");

            switch (val) {
                case 'Textbook':
                    $textbook.show();
                    $storybook.hide();
                    $magazine.hide();
                    $comic.hide();
                    break;
                case 'Storybook':
                    $textbook.hide();
                    $storybook.show();
                    $magazine.hide();
                    $comic.hide();
                    break;
                case 'Magazine':
                    $textbook.hide();
                    $storybook.hide();
                    $magazine.show();
                    $comic.hide();
                    break;
                case 'Comic':
                    $textbook.hide();
                    $storybook.hide();
                    $magazine.hide();
                    $comic.show();
                    break;
            }
            $(".info-type").text('(' + val + ')');
        }
    });

$('.ui.search')
    .search({
        apiSettings: {
            url: document.location.href.substring(0, document.location.href.lastIndexOf("/")) +
            '/search.php?query={query}',
            onResponse: function (result) {
                var json = {
                    books: []
                };
                $.each(result.books, function (index, item) {
                    var url = 'book.php?id=' + item.id;
                    json.books.push({
                        title: item.title,
                        description: item.category + '<br>by ' + item.author,
                        url: url,
                        price: item.price,
                        image: item.cover,
                        action: item.category
                    });
                });
                //console.log(json);
                return json;
            }
        },
        fields: {
            results: 'books'
        },
        minCharacters: 2
    });

$('.ui.book-form')
    .form({
        fields: {
            title: {
                identifier: 'title',
                rules: [
                    {
                        type: 'minLength[4]',
                        prompt: 'Book title must be at least {ruleValue} characters'
                    }
                ]
            },
            subtitle: {
                identifier: 'subtitle',
                rules: [
                    {
                        type: 'minLength[4]',
                        prompt: 'Book title must be at least {ruleValue} characters'
                    }
                ]
            },
            isbn: {
                identifier: 'isbn',
                rules: [
                    {
                        type: 'exactLength[13]',
                        prompt: 'ISBN must be {ruleValue} numbers'
                    },
                    {
                        type: 'regExp[/^[0-9]*$/]',
                        prompt: 'ISBN must only contain numbers'

                    }
                ]
            },
            category: {
                identifier: 'category',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please select a book category'
                    }
                ]
            },
            cover: {
                identifier: 'cover',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please add cover information'
                    },
                    {
                        type: 'url',
                        prompt: 'Cover must be a url'
                    }
                ]
            },
            comment: {
                identifier: 'reply',
                rules: [
                    {
                        type: 'minLength[10]',
                        prompt: 'Comment must have at least {ruleValue} characters'
                    }
                ]
            }
        }
    });

$('.ui.login-form')
    .form({
        fields: {
            email: {
                identifier: 'username',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your e-mail'
                    }
                ]
            },
            password: {
                identifier: 'password',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your password'
                    },
                    {
                        type: 'length[6]',
                        prompt: 'Your password must be at least 6 characters'
                    }
                ]
            }
        }
    });

// user registration form 
$('.ui.register-form')
    .form({
        fields: {
            username: {
                identifier: 'username',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter a username'
                    }
                ]
            },
            firstname: {
                identifier: 'firstname',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your First Name'
                    }
                ]
            },
            lastname: {
                identifier: 'lastname',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your Last Name'
                    }
                ]
            },
            email: {
                identifier: 'email',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter an e-mail'
                    },
                    {
                        type: 'email',
                        prompt: 'Please enter a valid e-mail'
                    }
                ]
            },
            gender: {
                identifier: 'gender',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please select a gender'
                    }
                ]
            },
            password: {
                identifier: 'password',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter a password'
                    },
                    {
                        type: 'minLength[6]',
                        prompt: 'Your password must be at least {ruleValue} characters'
                    }
                ]
            },
            confirmpassword: {
                identifier: 'confirmpassword',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Enter confirm password'
                    },
                    {
                        type: 'match[password]',
                        prompt: 'Confirm password doesn\'t match'
                    }
                ]
            }
        }
    });
// user registration form 
$('.ui.editprofile-form')
    .form({
        fields: {
            username: {
                identifier: 'username',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter a username'
                    }
                ]
            },
            firstname: {
                identifier: 'firstname',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your First Name'
                    }
                ]
            },
            lastname: {
                identifier: 'lastname',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter your Last Name'
                    }
                ]
            },
            email: {
                identifier: 'email',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter an e-mail'
                    },
                    {
                        type: 'email',
                        prompt: 'Please enter a valid e-mail'
                    }
                ]
            },
            gender: {
                identifier: 'gender',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please select a gender'
                    }
                ]
            },
            password: {
                identifier: 'password',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Please enter a password'
                    },
                    {
                        type: 'minLength[6]',
                        prompt: 'Your password must be at least {ruleValue} characters'
                    }
                ]
            },
            confirmpassword: {
                identifier: 'confirmpassword',
                rules: [
                    {
                        type: 'empty',
                        prompt: 'Enter confirm password'
                    },
                    {
                        type: 'match[password]',
                        prompt: 'Password doesnt match'
                    }
                ]
            }
        }
    });
