<?php

namespace Phpator\PhpdocParserBenchmarks;

use IteratorAggregate;

class DocblockProvider implements IteratorAggregate
{
    /**
     * {@inheritDoc}
     */
    public function getIterator()
    {
        yield 'Phpunit TestCase::create' => [
            'docblock' => <<<'EOT'
			/**
			 * @param ClassReflection $declaringClass
			 * @param ClassReflection|null $declaringTrait
			 * @param \PHPStan\Reflection\Php\BuiltinMethodReflection $reflection
			 * @param Type[] $phpDocParameterTypes
			 * @param Type|null $phpDocReturnType
			 * @param Type|null $phpDocThrowType
			 * @param bool $isDeprecated
			 * @param bool $isInternal
			 * @param bool $isFinal
			 * @return PhpMethodReflection
			 */
EOT
        ];

        yield 'Phpspec ObjectBehavior' => [
            'docblock' => <<<'EOT'
/**
 * The object behaviour is the default base class for specification.
 *
 * Most specs will extend this class directly.
 *
 * Its responsibility is to proxy method calls to PhpSpec caller which will
 * wrap the results into PhpSpec subjects. This results will then be able to
 * be matched against expectations.
 *
 * @method void beConstructedWith(...$arguments)
 * @method void beConstructedThrough($factoryMethod, array $constructorArguments = array())
 * @method void beAnInstanceOf($class)
 *
 * @method void shouldHaveType($type)
 * @method void shouldNotHaveType($type)
 * @method void shouldBeAnInstanceOf($type)
 * @method void shouldNotBeAnInstanceOf($type)
 * @method void shouldImplement($interface)
 * @method void shouldNotImplement($interface)
 *
 * @method void shouldIterateAs($iterable)
 * @method void shouldYield($iterable)
 * @method void shouldNotIterateAs($iterable)
 * @method void shouldNotYield($iterable)
 *
 * @method void shouldIterateLike($iterable)
 * @method void shouldYieldLike($iterable)
 * @method void shouldNotIterateLike($iterable)
 * @method void shouldNotYieldLike($iterable)
 *
 * @method void shouldStartIteratingAs($iterable)
 * @method void shouldStartYielding($iterable)
 * @method void shouldNotStartIteratingAs($iterable)
 * @method void shouldNotStartYielding($iterable)
 *
 * @method Subject\Expectation\DuringCall shouldThrow($exception = null)
 * @method Subject\Expectation\DuringCall shouldNotThrow($exception = null)
 * @method Subject\Expectation\DuringCall shouldTrigger($level = null, $message = null)
 *
 * @method void shouldHaveCount($count)
 * @method void shouldNotHaveCount($count)
 * @method void shouldContain($element)
 * @method void shouldNotContain($element)
 * @method void shouldHaveKeyWithValue($key, $value)
 * @method void shouldNotHaveKeyWithValue($key, $value)
 * @method void shouldHaveKey($key)
 * @method void shouldNotHaveKey($key)
 */
EOT
        ];

        yield 'Laravel Route' => [
            'docblock' => <<<'EOT'
/**
 * @method static \Illuminate\Routing\Route get(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route post(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route put(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route delete(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route patch(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route options(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route any(string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|callable|null $action = null)
 * @method static \Illuminate\Routing\RouteRegistrar prefix(string  $prefix)
 * @method static \Illuminate\Routing\RouteRegistrar where(array  $where)
 * @method static \Illuminate\Routing\PendingResourceRegistration resource(string $name, string $controller, array $options = [])
 * @method static \Illuminate\Routing\PendingResourceRegistration apiResource(string $name, string $controller, array $options = [])
 * @method static void apiResources(array $resources)
 * @method static \Illuminate\Routing\RouteRegistrar middleware(array|string|null $middleware)
 * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Support\Facades\Route $route)
 * @method static void substituteImplicitBindings(\Illuminate\Support\Facades\Route $route)
 * @method static \Illuminate\Routing\RouteRegistrar as(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar domain(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar name(string $value)
 * @method static \Illuminate\Routing\RouteRegistrar namespace(string $value)
 * @method static \Illuminate\Routing\Router|\Illuminate\Routing\RouteRegistrar group(array|\Closure|string $attributes, \Closure|string $routes)
 * @method static \Illuminate\Routing\Route redirect(string $uri, string $destination, int $status = 302)
 * @method static \Illuminate\Routing\Route permanentRedirect(string $uri, string $destination)
 * @method static \Illuminate\Routing\Route view(string $uri, string $view, array $data = [])
 * @method static void bind(string $key, string|callable $binder)
 * @method static void model(string $key, string $class, \Closure|null $callback = null)
 * @method static \Illuminate\Routing\Route current()
 * @method static string|null currentRouteName()
 * @method static string|null currentRouteAction()
 *
 * @see \Illuminate\Routing\Router
 */
EOT
        ];
        
        yield 'Faker Generator' => [
            'docblock' => <<<'EOT'
/**
 * @property string $name
 * @method string name(string $gender = null)
 * @property string $firstName
 * @method string firstName(string $gender = null)
 * @property string $firstNameMale
 * @property string $firstNameFemale
 * @property string $lastName
 * @property string $title
 * @method string title(string $gender = null)
 * @property string $titleMale
 * @property string $titleFemale
 *
 * @property string $citySuffix
 * @property string $streetSuffix
 * @property string $buildingNumber
 * @property string $city
 * @property string $streetName
 * @property string $streetAddress
 * @property string $postcode
 * @property string $address
 * @property string $country
 * @property float  $latitude
 * @property float  $longitude
 *
 * @property string $ean13
 * @property string $ean8
 * @property string $isbn13
 * @property string $isbn10
 *
 * @property string $phoneNumber
 * @property string $e164PhoneNumber
 *
 * @property string $company
 * @property string $companySuffix
 * @property string $jobTitle
 *
 * @property string $creditCardType
 * @property string $creditCardNumber
 * @method string creditCardNumber($type = null, $formatted = false, $separator = '-')
 * @property \DateTime $creditCardExpirationDate
 * @property string $creditCardExpirationDateString
 * @property array $creditCardDetails
 * @property string $bankAccountNumber
 * @method string iban($countryCode = null, $prefix = '', $length = null)
 * @property string $swiftBicNumber
 * @property string $vat
 *
 * @property string $word
 * @property string|array $words
 * @method string|array words($nb = 3, $asText = false)
 * @property string $sentence
 * @method string sentence($nbWords = 6, $variableNbWords = true)
 * @property string|array $sentences
 * @method string|array sentences($nb = 3, $asText = false)
 * @property string $paragraph
 * @method string paragraph($nbSentences = 3, $variableNbSentences = true)
 * @property string|array $paragraphs
 * @method string|array paragraphs($nb = 3, $asText = false)
 * @property string $text
 * @method string text($maxNbChars = 200)
 *
 * @method string realText($maxNbChars = 200, $indexSize = 2)
 *
 * @property string $email
 * @property string $safeEmail
 * @property string $freeEmail
 * @property string $companyEmail
 * @property string $freeEmailDomain
 * @property string $safeEmailDomain
 * @property string $userName
 * @property string $password
 * @method string password($minLength = 6, $maxLength = 20)
 * @property string $domainName
 * @property string $domainWord
 * @property string $tld
 * @property string $url
 * @property string $slug
 * @method string slug($nbWords = 6, $variableNbWords = true)
 * @property string $ipv4
 * @property string $ipv6
 * @property string $localIpv4
 * @property string $macAddress
 *
 * @property int       $unixTime
 * @property \DateTime $dateTime
 * @property \DateTime $dateTimeAD
 * @property string    $iso8601
 * @property \DateTime $dateTimeThisCentury
 * @property \DateTime $dateTimeThisDecade
 * @property \DateTime $dateTimeThisYear
 * @property \DateTime $dateTimeThisMonth
 * @property string    $amPm
 * @property string    $dayOfMonth
 * @property string    $dayOfWeek
 * @property string    $month
 * @property string    $monthName
 * @property string    $year
 * @property string    $century
 * @property string    $timezone
 * @method string amPm($max = 'now')
 * @method string date($format = 'Y-m-d', $max = 'now')
 * @method string dayOfMonth($max = 'now')
 * @method string dayOfWeek($max = 'now')
 * @method string iso8601($max = 'now')
 * @method string month($max = 'now')
 * @method string monthName($max = 'now')
 * @method string time($format = 'H:i:s', $max = 'now')
 * @method int unixTime($max = 'now')
 * @method string year($max = 'now')
 * @method \DateTime dateTime($max = 'now', $timezone = null)
 * @method \DateTime dateTimeAd($max = 'now', $timezone = null)
 * @method \DateTime dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null)
 * @method \DateTime dateTimeInInterval($date = '-30 years', $interval = '+5 days', $timezone = null)
 * @method \DateTime dateTimeThisCentury($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisDecade($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisYear($max = 'now', $timezone = null)
 * @method \DateTime dateTimeThisMonth($max = 'now', $timezone = null)
 *
 * @property string $md5
 * @property string $sha1
 * @property string $sha256
 * @property string $locale
 * @property string $countryCode
 * @property string $countryISOAlpha3
 * @property string $languageCode
 * @property string $currencyCode
 * @property boolean $boolean
 * @method boolean boolean($chanceOfGettingTrue = 50)
 *
 * @property int    $randomDigit
 * @property int    $randomDigitNotNull
 * @property string $randomLetter
 * @property string $randomAscii
 * @method int randomNumber($nbDigits = null, $strict = false)
 * @method int|string|null randomKey(array $array = array())
 * @method int numberBetween($min = 0, $max = 2147483647)
 * @method float randomFloat($nbMaxDecimals = null, $min = 0, $max = null)
 * @method mixed randomElement(array $array = array('a', 'b', 'c'))
 * @method array randomElements(array $array = array('a', 'b', 'c'), $count = 1, $allowDuplicates = false)
 * @method array|string shuffle($arg = '')
 * @method array shuffleArray(array $array = array())
 * @method string shuffleString($string = '', $encoding = 'UTF-8')
 * @method string numerify($string = '###')
 * @method string lexify($string = '????')
 * @method string bothify($string = '## ??')
 * @method string asciify($string = '****')
 * @method string regexify($regex = '')
 * @method string toLower($string = '')
 * @method string toUpper($string = '')
 * @method Generator optional($weight = 0.5, $default = null)
 * @method Generator unique($reset = false, $maxRetries = 10000)
 * @method Generator valid($validator = null, $maxRetries = 10000)
 *
 * @method integer biasedNumberBetween($min = 0, $max = 100, $function = 'sqrt')
 *
 * @property string $macProcessor
 * @property string $linuxProcessor
 * @property string $userAgent
 * @property string $chrome
 * @property string $firefox
 * @property string $safari
 * @property string $opera
 * @property string $internetExplorer
 * @property string $windowsPlatformToken
 * @property string $macPlatformToken
 * @property string $linuxPlatformToken
 *
 * @property string $uuid
 *
 * @property string $mimeType
 * @property string $fileExtension
 * @method string file($sourceDirectory = '/tmp', $targetDirectory = '/tmp', $fullPath = true)
 *
 * @method string imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null, $gray = false)
 * @method string image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null)
 *
 * @property string $hexColor
 * @property string $safeHexColor
 * @property string $rgbColor
 * @property array $rgbColorAsArray
 * @property string $rgbCssColor
 * @property string $safeColorName
 * @property string $colorName
 *
 * @method string randomHtml($maxDepth = 4, $maxWidth = 4)
 *
 */
EOT
        ];
    }
}
