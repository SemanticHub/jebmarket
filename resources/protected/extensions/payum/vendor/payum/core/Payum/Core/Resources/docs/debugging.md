# Debugging

I must admit the architecture of payum is hard to debug (Each action decide whether it supports request or not, an action can delegate some job to another action, etc). To solve this problem we implement `LogExecutedActionsExtension`. It logs all executed actions with some details. Just add the extension with PSR-3 logger and check the log file after.

_**Council**: You can filter log by `[Payum]`. For example using `grep` tool._

```php
<?php
use Payum\Core\Bridge\Psr\Log\LogExecutedActionsExtension;
use Payum\Core\Tests\Mocks\Action\CaptureAction;
use Payum\Core\Payment;
use Payum\Core\Request\CaptureRequest;

$payment = new Payment;
$payment->addExtension(new LogExecutedActionsExtension($logger));
$payment->addAction(new CaptureAction);

$payment->execute(new CaptureRequest($model = new \stdClass));
```

Here's an example of what the log may contain:

```
DEBUG - [Payum] 1# Payum\Core\Action\StatusDetailsAggregatedModelAction::execute(BinaryMaskStatusRequest{model: Token})
DEBUG - [Payum] 2# Payum\Payex\Action\PaymentDetailsStatusAction::execute(BinaryMaskStatusRequest{model: PaymentDetails})
DEBUG - [Payum] 1# Payum\Core\Action\CaptureDetailsAggregatedModelAction::execute(SecuredCaptureRequest{model: Token})
DEBUG - [Payum] 2# Payum\Payex\Action\PaymentDetailsCaptureAction::execute(SecuredCaptureRequest{model: PaymentDetails})
DEBUG - [Payum] 3# Payum\Payex\Action\Api\InitializeOrderAction::execute(InitializeOrderRequest{model: ArrayObject})
DEBUG - [Payum] 3# InitializeOrderAction::execute(InitializeOrderRequest{model: ArrayObject}) throws interactive RedirectUrlInteractiveRequest{url: https://test-confined.payex.com/PxOrderCC.aspx?orderRef=7cbefc70ff294fd194d2411f457423d6}
DEBUG - [Payum] 2# PaymentDetailsCaptureAction::execute(SecuredCaptureRequest{model: PaymentDetails}) throws interactive RedirectUrlInteractiveRequest{url: https://test-confined.payex.com/PxOrderCC.aspx?orderRef=7cbefc70ff294fd194d2411f457423d6}
DEBUG - [Payum] 1# CaptureDetailsAggregatedModelAction::execute(SecuredCaptureRequest{model: PaymentDetails}) throws interactive RedirectUrlInteractiveRequest{url: https://test-confined.payex.com/PxOrderCC.aspx?orderRef=7cbefc70ff294fd194d2411f457423d6}
```

As you see it shows stack of executed actions. Also it shows some details about the request. For example it could show a model class related with request.

Back to [index](index.md).