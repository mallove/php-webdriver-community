<?php
// Copyright 2004-present Facebook. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

namespace Facebook\WebDriver\Exception;

use Exception;

class WebDriverException extends Exception
{
    private $results;

    /**
     * @param string $message
     * @param mixed $results
     */
    public function __construct($message, $results = null)
    {
        parent::__construct($message);
        $this->results = $results;
    }

    /**
     * @return mixed
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Throw WebDriverExceptions based on WebDriver status code.
     *
     * @param int $status_code
     * @param string $message
     * @param mixed $results
     *
     * @throws ElementNotSelectableException
     * @throws ElementNotVisibleException
     * @throws ExpectedException
     * @throws IMEEngineActivationFailedException
     * @throws IMENotAvailableException
     * @throws IndexOutOfBoundsException
     * @throws InvalidCookieDomainException
     * @throws InvalidCoordinatesException
     * @throws InvalidElementStateException
     * @throws InvalidSelectorException
     * @throws MoveTargetOutOfBoundsException
     * @throws NoAlertOpenException
     * @throws NoCollectionException
     * @throws NoScriptResultException
     * @throws NoStringException
     * @throws NoStringLengthException
     * @throws NoStringWrapperException
     * @throws NoSuchCollectionException
     * @throws NoSuchDocumentException
     * @throws NoSuchDriverException
     * @throws NoSuchElementException
     * @throws NoSuchFrameException
     * @throws NoSuchWindowException
     * @throws NullPointerException
     * @throws ScriptTimeoutException
     * @throws SessionNotCreatedException
     * @throws StaleElementReferenceException
     * @throws TimeOutException
     * @throws UnableToSetCookieException
     * @throws UnexpectedAlertOpenException
     * @throws UnexpectedJavascriptException
     * @throws UnknownCommandException
     * @throws UnknownServerException
     * @throws UnrecognizedExceptionException
     * @throws WebDriverCurlException
     * @throws XPathLookupException
     */
    public static function throwException($status_code, $message, $results)
    {
        switch ($status_code) {
            case 1:
                debug_print_backtrace();
                throw new IndexOutOfBoundsException($message, $results);
            case 2:
                debug_print_backtrace();
                throw new NoCollectionException($message, $results);
            case 3:
                debug_print_backtrace();
                throw new NoStringException($message, $results);
            case 4:
                debug_print_backtrace();
                throw new NoStringLengthException($message, $results);
            case 5:
                debug_print_backtrace();
                throw new NoStringWrapperException($message, $results);
            case 6:
                debug_print_backtrace();
                throw new NoSuchDriverException($message, $results);
            case 7:
                debug_print_backtrace();
                throw new NoSuchElementException($message, $results);
            case 8:
                debug_print_backtrace();
                throw new NoSuchFrameException($message, $results);
            case 9:
                debug_print_backtrace();
                throw new UnknownCommandException($message, $results);
            case 10:
                debug_print_backtrace();
                throw new StaleElementReferenceException($message, $results);
            case 11:
                debug_print_backtrace();
                throw new ElementNotVisibleException($message, $results);
            case 12:
                debug_print_backtrace();
                throw new InvalidElementStateException($message, $results);
            case 13:
                debug_print_backtrace();
                throw new UnknownServerException($message, $results);
            case 14:
                debug_print_backtrace();
                throw new ExpectedException($message, $results);
            case 15:
                debug_print_backtrace();
                throw new ElementNotSelectableException($message, $results);
            case 16:
                debug_print_backtrace();
                throw new NoSuchDocumentException($message, $results);
            case 17:
                debug_print_backtrace();
                throw new UnexpectedJavascriptException($message, $results);
            case 18:
                debug_print_backtrace();
                throw new NoScriptResultException($message, $results);
            case 19:
                debug_print_backtrace();
                throw new XPathLookupException($message, $results);
            case 20:
                debug_print_backtrace();
                throw new NoSuchCollectionException($message, $results);
            case 21:
                debug_print_backtrace();
                throw new TimeOutException($message, $results);
            case 22:
                debug_print_backtrace();
                throw new NullPointerException($message, $results);
            case 23:
                debug_print_backtrace();
                throw new NoSuchWindowException($message, $results);
            case 24:
                debug_print_backtrace();
                throw new InvalidCookieDomainException($message, $results);
            case 25:
                debug_print_backtrace();
                throw new UnableToSetCookieException($message, $results);
            case 26:
                debug_print_backtrace();
                throw new UnexpectedAlertOpenException($message, $results);
            case 27:
                debug_print_backtrace();
                throw new NoAlertOpenException($message, $results);
            case 28:
                debug_print_backtrace();
                throw new ScriptTimeoutException($message, $results);
            case 29:
                debug_print_backtrace();
                throw new InvalidCoordinatesException($message, $results);
            case 30:
                debug_print_backtrace();
                throw new IMENotAvailableException($message, $results);
            case 31:
                debug_print_backtrace();
                throw new IMEEngineActivationFailedException($message, $results);
            case 32:
                debug_print_backtrace();
                throw new InvalidSelectorException($message, $results);
            case 33:
                debug_print_backtrace();
                throw new SessionNotCreatedException($message, $results);
            case 34:
                debug_print_backtrace();
                throw new MoveTargetOutOfBoundsException($message, $results);
            default:
                debug_print_backtrace();
                throw new UnrecognizedExceptionException($message, $results);
        }
    }
}
