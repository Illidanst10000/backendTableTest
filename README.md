
#### Consider the following array:
```
array(
    array(
        'House' => 'Baratheon',
        'Sigil' => 'A crowned stag',
        'Motto' => 'Ours is the Fury',
        ),
    array(
        'Leader' => 'Eddard Stark',
        'House' => 'Stark',
        'Motto' => 'Winter is Coming',
        'Sigil' => 'A grey direwolf'
        ),
    array(
        'House' => 'Lannister',
        'Leader' => 'Tywin Lannister',
        'Sigil' => 'A golden lion'
        ),
    array(
	      'Q' => 'Z'
    )
);

```

#### Write an application that uses the MVC pattern that will take this array and prints the following ASCII table:
```
=========================================================================
|     House |           Leader |            Motto | Q |           Sigil |
-------------------------------------------------------------------------
| Baratheon |                  | Ours is the Fury |   |  A crowned stag |
|     Stark |     Eddard Stark | Winter is Coming |   | A grey direwolf |
| Lannister |  Tywin Lannister |                  |   |   A golden lion |
|           |                  |                  | Z |                 |
=========================================================================
```
#### Take into account the following:
* The keys of the supplied array are in random order.
* The keys in the resulting table should be sorted in alphabetical order.
* The array keys and values are examples. The application must be able to take any kind and number of keys.
* The length of the array is an example. The application must be able to take every number of rows.
* The number of keys can vary for every row of data. If some keys are missing this must not break the program. And the data must still be shown correctly in the table with the missing cell kept blank.
* The text in every cell is right alligned.
* The keys and values can be of any length.
* The array provided is not the array that we will use to test the application. That will be a completely different array with different keys and values. So make sure your code can handle this.

#### The project is judged on the following points in order of importance.
1. The project runs without the need for any form of modification (e.g. configuration). The code will be run with a PHP CLI command.
2. The project has been thoroughly tested.
3. There is good level of documentation in the code and a seperate documentation is provided to explain the design of the application.
4. The code is clean and concise.
5. The code is robust. I.e. the code can handle defective input.
6. The code is efficient.
7. The project is able to produce results without errors on PHP 7.3 or higher.
8. The project is able to produce results without notices on PHP 7.3 or higher.
