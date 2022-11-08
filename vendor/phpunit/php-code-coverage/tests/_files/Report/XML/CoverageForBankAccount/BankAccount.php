<?xml version="1.0"?>
<phpunit xmlns="https://schema.phpunit.de/coverage/1.0">
  <file name="BankAccount.php" path="%e">
    <totals>
      <lines total="33" comments="0" code="33" executable="10" executed="5" percent="50.00"/>
      <methods count="4" tested="3" percent="75.00"/>
      <functions count="0" tested="0" percent="0"/>
      <classes count="1" tested="0" percent="0.00"/>
      <traits count="0" tested="0" percent="0"/>
    </totals>
    <class name="BankAccount" start="2" executable="10" executed="5" crap="8.12">
      <package full="" name="" sub="" category=""/>
      <namespace name=""/>
      <method name="getBalance" signature="getBalance()" start="6" end="9" crap="1" executable="1" executed="1" coverage="100"/>
      <method name="setBalance" signature="setBalance($balance)" start="11" end="18" crap="6" executable="5" executed="0" coverage="0"/>
      <method name="depositMoney" signature="depositMoney($balance)" start="20" end="25" crap="1" executable="2" executed="2" coverage="100"/>
      <method name="withdrawMoney" signature="withdrawMoney($balance)" start="27" end="32" crap="1" executable="2" executed="2" coverage="100"/>
    </class>
    <coverage>
      <line nr="8">
        <covered by="BankAccountTest::testBalanceIsInitiallyZero"/>
        <covered by="BankAccountTest::testDepositWithdrawMoney"/>
      </line>
      <line nr="22">
        <covered by="BankAccountTest::testBalanceCannotBecomeNegative2"/>
        <covered by="BankAccountTest::testDepositWithdrawMoney"/>
      </line>
      <line nr="24">
        <covered by="BankAccountTest::testDepositWithdrawMoney"/>
      </line>
      <line nr="29">
        <covered by="BankAccountTest::testBalanceCannotBecomeNegative"/>
        <covered by="BankAccountTest::testDepositWithdrawMoney"/>
      </line>
      <line nr="31">
        <covered by="BankAccountTest::testDepositWithdrawMoney"/>
      </line>
    </coverage>
    <source>
      <line no="1">
        <token name="T_OPEN_TAG">&lt;?php</token>
      </line>
      <line no="2">
        <token name="T_CLASS">class</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">BankAccount</token>
      </line>
      <line no="3">
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="4">
        <token name="T_WHITESPACE">    </token>
        <token name="T_PROTECTED">protected</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_EQUAL">=</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_LNUMBER">0</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="5"/>
      <line no="6">
        <token name="T_WHITESPACE">    </token>
        <token name="T_PUBLIC">public</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_FUNCTION">function</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">getBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_CLOSE_BRACKET">)</token>
      </line>
      <line no="7">
        <token name="T_WHITESPACE">    </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="8">
        <token name="T_WHITESPACE">        </token>
        <token name="T_RETURN">return</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">balance</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="9">
        <token name="T_WHITESPACE">    </token>
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="10"/>
      <line no="11">
        <token name="T_WHITESPACE">    </token>
        <token name="T_PROTECTED">protected</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_FUNCTION">function</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">setBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_CLOSE_BRACKET">)</token>
      </line>
      <line no="12">
        <token name="T_WHITESPACE">    </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="13">
        <token name="T_WHITESPACE">        </token>
        <token name="T_IF">if</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_IS_GREATER_OR_EQUAL">&gt;=</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_LNUMBER">0</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="14">
        <token name="T_WHITESPACE">            </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">balance</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_EQUAL">=</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="15">
        <token name="T_WHITESPACE">        </token>
        <token name="T_CLOSE_CURLY">}</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_ELSE">else</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="16">
        <token name="T_WHITESPACE">            </token>
        <token name="T_THROW">throw</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_NEW">new</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">RuntimeException</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="17">
        <token name="T_WHITESPACE">        </token>
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="18">
        <token name="T_WHITESPACE">    </token>
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="19"/>
      <line no="20">
        <token name="T_WHITESPACE">    </token>
        <token name="T_PUBLIC">public</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_FUNCTION">function</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">depositMoney</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_CLOSE_BRACKET">)</token>
      </line>
      <line no="21">
        <token name="T_WHITESPACE">    </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="22">
        <token name="T_WHITESPACE">        </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">setBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">getBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_PLUS">+</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="23"/>
      <line no="24">
        <token name="T_WHITESPACE">        </token>
        <token name="T_RETURN">return</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">getBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="25">
        <token name="T_WHITESPACE">    </token>
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="26"/>
      <line no="27">
        <token name="T_WHITESPACE">    </token>
        <token name="T_PUBLIC">public</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_FUNCTION">function</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_STRING">withdrawMoney</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_CLOSE_BRACKET">)</token>
      </line>
      <line no="28">
        <token name="T_WHITESPACE">    </token>
        <token name="T_OPEN_CURLY">{</token>
      </line>
      <line no="29">
        <token name="T_WHITESPACE">        </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">setBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">getBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_MINUS">-</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$balance</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="30"/>
      <line no="31">
        <token name="T_WHITESPACE">        </token>
        <token name="T_RETURN">return</token>
        <token name="T_WHITESPACE"> </token>
        <token name="T_VARIABLE">$this</token>
        <token name="T_OBJECT_OPERATOR">-&gt;</token>
        <token name="T_STRING">getBalance</token>
        <token name="T_OPEN_BRACKET">(</token>
        <token name="T_CLOSE_BRACKET">)</token>
        <token name="T_SEMICOLON">;</token>
      </line>
      <line no="32">
        <token name="T_WHITESPACE">    </token>
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="33">
        <token name="T_CLOSE_CURLY">}</token>
      </line>
      <line no="34"/>
    </source>
  </file>
</phpunit>
