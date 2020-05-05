<?php

//regular expressions used to check/search a string for a pattern as opposed to a specific string 

kangaro*
//matches a pattern as opposed to a string 
//refers to match 0 or more instances of o
kangaroo
kangar
kangarooooooo

kanga(ro)* 
//matches the ro - zero or more instances of the preceding token 
kangaroo
kangararororororo

kangaro+
//matches at least one instance of the preceeding token 
kangaroo
kangaro

kangaro?
//match with more than one 
kangroo

kangaro{3}
//matches with three of the preceeding token
kangarooo

kangaro{3,}
//matches three or more of the preceding token

kangaro{3,5}
//matches between three and five of the preceding token


//GROUPS
[kgr]
//match anything within the square brackets as individual elements 

[kgr]*
//can be combined with quantifiers, to select zero or more instances

kan[gzy]+roo
kangggrooo
kanzggyroo
kanyroo


[^]
//will match eveyrthing other than is within the square brackets
[^zyo]
//will not match anything with z, y or o



//RANGES
[a-z]
//any characters between a-z, lowercase
[A-Z]
//capitals
[a-zA-Z]

[A-Z_*%-]
//inside a group, quantifiers treated as regular characters

[kang\{roo}]
//backslash will isolate character after it to be searched for rather than acting as a quantifier 

kang\nroo 
// \n means new line 
// in windows can sometimes be \r

kang\troo 
//tab 

