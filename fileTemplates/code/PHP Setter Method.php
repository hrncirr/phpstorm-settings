/**
 * @param ${TYPE_HINT} $${PARAM_NAME}
 */
public ${STATIC} function set${NAME}(${TYPE_HINT} $${PARAM_NAME})
{
#if (${STATIC} == "static")
    self::$${FIELD_NAME} = $${PARAM_NAME};
#else
    $this->${FIELD_NAME} = $${PARAM_NAME};
#end
}
