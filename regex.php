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