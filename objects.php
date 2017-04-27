<?php

// CREATING AN OBJECT
class content {
    public $author;
    public $title;
    public $date;
    public $body;
    public $tags = array ();

    // METHODS ARE FUNCTIONS THAT BELONG TO THE CLASS
    // IT'S CALLED A METHOD WHEN IT'S PART OF THE CLASS
    function formatTags()
    {
        // contains HTML formatted tags
        $formattedTags = array();

        // contains final string of formatted tags with commas
        $tagsDisplay;

        foreach ($this->tags as $tag) {
            //replace spaces with hyphens for URLs.
            $urlifiedTag = str_replace(' ', '-', $tag);
            $linkedTag = '<a href="/tags/' . $urlifiedTag . '">' . $tag . '</a>';
            array_push($formattedTags, $linkedTag);
        }

        $tagsDisplay = implode(", ", $formattedTags);

        return $tagsDisplay;

    }
}

// MAKING AN OBJECT
$article = new content();

// SETTING OBJECT PROPERTIES (ARE VARIABLES THAT BELONG TO THE CLASS)
$article->author = 'Bolivar';
$article->title  = 'Learning objects';
$article->date   = '12/21/1987';
$article->body   = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, fugit distinctio saepe tempore repellendus labore deserunt aliquam, voluptatum dicta accusantium laudantium, perspiciatis esse nam maiores. Ad dignissimos quisquam, corporis cupiditate!';
$article->tags   = array('learn php', 'php learning', 'objects');

?>