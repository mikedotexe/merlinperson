<?php
$adnumber = 5;

$quotes = array ();
$quotes[] = array('quote' => 'Intelligence without ambition is a bird without wings.', 'author' => 'Salvador Dali');
$quotes[] = array('quote' => 'Bird watching is the most popular sport in America - look it up.', 'author' => 'Papa Joe');
$quotes[] = array('quote' => 'It may be hard for an egg to turn into a bird: it would be a jolly sight harder for it to learn to fly while remaining an egg. We are like eggs at present. And you cannot go on indefinitely being just an ordinary, decent egg. We must be hatched or go bad.', 'author' => 'C.S. Lewis');
$quotes[] = array('quote' => 'Girdles and wire stays should have never been invented. No man wants to hug a padded bird cage.', 'author' => 'Marilyn Monroe');
$quotes[] = array('quote' => 'A bird doesn\'t sing because it has an answer, it sings because it has a song.', 'author' => 'Lou Holtz');
$quotes[] = array('quote' => 'I am no bird; and no net ensnares me; I am a free human being with an independent will.', 'author' => 'Charlotte Bronte');
$quotes[] = array('quote' => 'Hold fast to dreams, for if dreams die, life is a broken-winged bird that cannot fly.', 'author' => 'Langston Hughes');
$quotes[] = array('quote' => 'No bird soars too high if he soars with his own wings.', 'author' => 'William Blake');
$quotes[] = array('quote' => 'I\'d rather learn from one bird how to sing than to teach ten thousand stars how not to dance.', 'author' => 'E.E. Cummings');
$quotes[] = array('quote' => 'The bird a nest, the spider a web, man friendship.', 'author' => 'William Blake');
$quotes[] = array('quote' => 'It\'s best to have failure happen early in life. It wakes up the Phoenix bird in you so you rise from the ashes.', 'author' => 'Anne Baxter');
$quotes[] = array('quote' => 'I\'m youth, I\'m joy, I\'m a little bird that has broken out of the egg.', 'author' => 'James M. Barrie');
$quotes[] = array('quote' => 'Man can now fly in the air like a bird, swim under the ocean like a fish, he can burrow into the ground like a mole. Now if only he could walk the earth like a man, this would be paradise.', 'author' => 'Tommy Douglas');
$quotes[] = array('quote' => 'Just as the bird sings or the butterfly soars, because it is his natural characteristic, so the artist works.', 'author' => 'Alma Gluck');
$quotes[] = array('quote' => 'If I could come back as anything - I\'d be a bird, first, but definitely the command key is my second choice.', 'author' => 'Nikki Giovanni');
//$quotes[] = array('quote' => '', 'author' => '');
$randomQuoteNum = rand(0, count($quotes) - 1);
$periods = '';
for ($i = 0; $i < $adnumber; $i++){
	$periods .= '.';
}

echo $periods . ';' . $quotes[$randomQuoteNum]['quote'] . '|' . $quotes[$randomQuoteNum]['author'];
?>