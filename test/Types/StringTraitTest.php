<?php
/**
 * Unit tests for functions within the DRY subnamespace (traits)
 * 
 * @see https://docs.phpunit.de/en/12.3/attributes.html#dataprovider
 */
use PHPUnit\Framework\TestCase;
use SchrodtSven\PhpLab\Types\StringClass;
use PHPUnit\Framework\Attributes\TestWith;
class StringTraitTest extends TestCase
{
    
    // StringBoolTrait testing
    
    #[TestWith(['Aileen', 'Aile', 'een', 'een'])]
    #[TestWith(['Analise', 'Ana', 'lise', 'ise'])]
    #[TestWith(['Andree', 'An', 'dree', 'ree'])]
    #[TestWith(['Ania', 'An', 'ia', 'nia'])]
    #[TestWith(['Auroora', 'A', 'uroor', 'ora'])]
    #[TestWith(['Biddy', 'Bi', 'ddy', 'ddy'])]
    #[TestWith(['Carolin', 'Caroli', 'lin', 'lin'])]
    #[TestWith(['Daniele', 'Da', 'iel', 'ele'])]
    #[TestWith(['Daphene', 'Daphe', 'hene', 'ene'])]
    #[TestWith(['Dasha', 'Das', 'ha', 'sha'])]
    #[TestWith(['Desdemona', 'D', 'emona', 'ona'])]
    #[TestWith(['Donnajean', 'Donnaje', 'jean', 'ean'])]
    #[TestWith(['Georgeta', 'Georget', 'rget', 'eta'])]
    #[TestWith(['Hilda', 'H', 'ild', 'lda'])]
    #[TestWith(['Kaycee', 'K', 'cee', 'cee'])]
    #[TestWith(['Lucie', 'Luc', 'uci', 'cie'])]
    #[TestWith(['Lurette', 'Lur', 'uret', 'tte'])]
    #[TestWith(['Mair', 'M', 'ai', 'air'])]
    #[TestWith(['Maureen', 'Maure', 'reen', 'een'])]
    #[TestWith(['Milli', 'Mi', 'ill', 'lli'])]
    #[TestWith(['Nikkie', 'Nikk', 'ikk', 'kie'])]
    #[TestWith(['Suzanne', 'Suzan', 'nne', 'nne'])]
    #[TestWith(['Zorah', 'Zor', 'rah', 'rah'])]
    public function testIfBeginsEndsContainsWorxProperly(string $origin, string $bg, string $md, string $en): void
    {
        $s = new StringClass($origin);
        $this->assertTrue($s->begins($bg));
        $this->assertTrue($s->ends($en));
        $this->assertTrue($s->contains($md));
    }


    
    
}